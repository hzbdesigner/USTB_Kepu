<?php

class LifeController extends Controller
{	
	public $layout='main';
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

	public function actionIndex()
	{
		$this->render('index');
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