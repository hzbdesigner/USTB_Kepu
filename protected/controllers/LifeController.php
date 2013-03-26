<?php

class LifeController extends Controller
{	
	public $layout='main';

	public function actionIndex($column_id,$catalog_id)
	{	
		//article
		$criteria = new CDbCriteria;
		$criteria->addCondition("column_id='$column_id'");
		if($catalog_id !=="all"){
			$criteria->addCondition("catalog_id='$catalog_id'");
		}
		$models=Article::model()->findAll($criteria);

		//column&catalog
		$column=Column::model()->findByPk($column_id);
		$catalogs=$column->catalogs;
		$this->render('index',array('models'=>$models,'catalogs'=>$catalogs,'catalog_id'=>$catalog_id,'column_id'=>$column_id));
	}
	public function actionYejin()
	{
		$this->render('yejin');
	}

	public function actionCailiao()
	{
		$this->render('cailiao');
	}

	public function actionJidian()
	{
		$this->render('jidian');
	}

	public function actionRenwu()
	{
		$this->render('renwu');
	}

	public function actionJianzhu()
	{
		$this->render('jianzhu');
	}

	public function actionShengwu()
	{
		$this->render('shengwu');
	}

	public function actionZiran()
	{
		$this->render('ziran');
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