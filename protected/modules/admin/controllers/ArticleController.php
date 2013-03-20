<?php

class ArticleController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';


	/**
	 * @return array action filters
	 */
	// public function filters()
	// {
	// 	return array(
	// 		'accessControl', // perform access control for CRUD operations
	// 		'postOnly + delete', // we only allow deletion via POST request
	// 	);
	// }

	// /**
	//  * Specifies the access control rules.
	//  * This method is used by the 'accessControl' filter.
	//  * @return array access control rules
	//  */
	// public function accessRules()
	// {
	// 	return array(
	// 		array('allow',  // allow all users to perform 'index' and 'view' actions
	// 			'actions'=>array('index','view'),
	// 			'users'=>array('*'),
	// 		),
	// 		array('allow', // allow authenticated user to perform 'create' and 'update' actions
	// 			'actions'=>array('create','update'),
	// 			'users'=>array('@'),
	// 		),
	// 		array('allow', // allow admin user to perform 'admin' and 'delete' actions
	// 			'actions'=>array('admin','delete'),
	// 			'users'=>array('admin'),
	// 		),
	// 		array('deny',  // deny all users
	// 			'users'=>array('*'),
	// 		),
	// 	);
	// }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$msg = '';
		$error = '';
		if(isset($_POST['Article']))
		{	
			//属性这么多，怎么验证先后啊~~
			//图片验证
			if (!empty($_FILES)){ 
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['despic']['name']);
				$ext = strtolower( $fileParts['extension'] ); //文件类型转为小写~~
				
				if ( in_array( $ext ,$fileTypes ) ){   //是否在这个数组中？？
					
					$file_name = 'despic_'.time().rand(0,999).'.'.$ext;//文件命名，重新名一个名
					$despic_file_path =  Yii::app()->basePath.'/../assets_admin/upload/'.$file_name;//设置存储路径（包括自己的名字）
					move_uploaded_file( $_FILES['despic']['tmp_name'] , $despic_file_path);  //拷贝副本，将副本文件存储到新的位置。
					
					$_POST['Article']['despic'] = 'http://'.$_SERVER['HTTP_HOST'].Yii::app()->baseUrl.'/assets_admin/upload/'.$file_name;
				}else{
					$msg = '请上传 png/jpg/gif 格式的图片LOGO';//如果上传的文件格式不对的话
				}
			}else{
				$msg = '请上传图片'; //如果$_file为空的话
			}

			if( $_POST['Article']['title'] ){
						
				$model=new Article;
				$model->attributes=$_POST['Article'];
				if($model->save()){
					
					$this->redirect(array('admin',array('cid'=>0)));
				}else{
					$msg = '保存失败！'; //如果没有保存到数据库的话
					$error = '请正确填写文章标题、分类、正文~！';

				}
			}else{
				$msg = '请填写名称！'; //Article对象没有name属性的话
			}	
		}
		
		//数据存储完毕
		$catalogs=Catalog::model()->findAll();
		$sub_content=$this->renderPartial('create',array(
			'catalogs'=>$catalogs,
			'error'=>$error,
			// 'model'=>$model,
			'msg'=>$msg,
		),true);

		$this->render('index',array('sub_content'=>$sub_content));
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->aid));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($aid)
	{
		$this->loadModel($aid)->delete();
		$this->redirect(array('admin'));

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


	public function actionAdmin($column_id,$catalog_id) //navbar上点击，全是all
	{
		
		//article的显示
		$criteria = new CDbCriteria;
		$criteria->order='article_id DESC';	
		$criteria->addCondition("cid='$column_id'");//获取整个栏目的article
		if($catalog_id != "all"){
			$criteria->addCondition("catalog_id='$catalog_id'"); //获取栏目下某个catalog的article
		}
		$articles = Article::Model()->findAll($criteria);
		
		//tabbar上的catalog的显示，只需确定是那个栏目的catalog就成——因此值与栏目有关。
		$criteria_ca = new CDbCriteria;
		$criteria_ca->order='catalog_id DESC';	
		$criteria_ca->addCondition("column_id='$column_id'");
		$catalogs = Catalog::model()->findAll($criteria_ca);

		//pages
		$current_page = isset( $_REQUEST['page'] )?$_REQUEST['page']:1;
		$count = Article::model()->count( $criteria);
		$pages = new CPagination( $count );
		
		$pages->pageSize = 20;
		$pages->applyLimit( $criteria );
		$page_num = ceil( $count/$pages->pageSize );
		
		

		//渲染
		$sub_content=$this->renderPartial('admin',array(
			//article
			'articles'=>$articles,
			//catalogs
			'catalogs'=>$catalogs,
			//pages
			'pages' => $pages,
			'current_page' => $current_page,
			'count'=>$count,
			//传进来的参数
			'column_id'=>$column_id,
			'catalog_id'=>$catalog_id,
		),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
			//传进来的参数
			'column_id'=>$column_id,
			'catalog_id'=>$catalog_id,	
		));


	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Article::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
