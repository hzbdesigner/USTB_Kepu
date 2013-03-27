<?php

class WorkController extends Controller
{	
	public $layout='main';

	public function actionIndex($column_id,$catalog_id)
	{	
		//article
		$criteria = new CDbCriteria;
		$criteria->order='article_id DESC';
		$criteria->addCondition("column_id='$column_id'");
		if($catalog_id !=="all"){
			$criteria->addCondition("catalog_id='$catalog_id'");
		}
		$models=Article::model()->findAll($criteria);

		//column&catalog
		$column=Column::model()->findByPk($column_id);
		$criteria_ca = new CDbCriteria;
		$criteria_ca->order='order_id ASC';
		$criteria_ca->addCondition("column_id='$column_id'");
		$catalogs=Catalog::model()->findAll($criteria_ca);
		//$this->render('index',array('models'=>$models,'catalogs'=>$catalogs,'catalog_id'=>$catalog_id,'column_id'=>$column_id));
		$sub_content = $this->renderPartial($catalog_id ,array('models'=>$models),true);
	    $this->render('index',array('sub_content' =>$sub_content,'catalogs'=>$catalogs,'catalog_id'=>$catalog_id,'column_id'=>$column_id));
	}

	public function actionView($article_id,$column_id,$catalog_id)
	{	
		//article		
		$model=Article::model()->findByPk($article_id);
		$this->render('view',array('model'=>$model,'column_id'=>$column_id,'catalog_id'=>$catalog_id));

	}
	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}