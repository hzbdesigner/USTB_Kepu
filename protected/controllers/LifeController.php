<?php

class LifeController extends Controller
{	
	public $layout='main';

	public function actionIndex($column_id,$catalog_id)
	{	
		$this->render('index');
	}

	public function actionView($column_id,$catalog_id)
	{	
		//article		
		// $model=Article::model()->findByPk($article_id);
		// $model->read_num += 1;
		// $model->save();
		// $this->render('view',array('model'=>$model,'column_id'=>$column_id,'catalog_id'=>$catalog_id));

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
		$this->render('view',array('models'=>$models,'catalogs'=>$catalogs,'catalog_id'=>$catalog_id,'column_id'=>$column_id));

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