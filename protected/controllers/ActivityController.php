<?php

class ActivityController extends Controller
{
	public function actionShijian()
	{
		$this->render('shijian');
	}

	public function actionZhiyuan()
	{
		$this->render('zhiyuan');
	}

	public function actionShetuan()
	{
		$this->render('shetuan');
	}

	public function actionYaolanbei()
	{
		$this->render('yaolanbei');
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