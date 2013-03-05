<?php

class WorkController extends Controller
{
	public function actionBrief()
	{
		$this->render('brief');
	}

	public function actionZhanpin()
	{
		$this->render('zhanpin');
	}

	public function actionWenyi()
	{
		$this->render('wenyi');
	}

	public function actionDongman()
	{
		$this->render('dongman');
	}

	public function actionWangluo()
	{
		$this->render('wangluo');
	}

	public function actionBaogao()
	{
		$this->render('baogao');
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