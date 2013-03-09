<?php

class WorkController extends Controller
{	
	public $layout='main';

		public function actionIndex()
	{
		$sub_content = $this->renderPartial('/work/brief' ,array(),true);
	    $this->render('index',array('sub_content' =>$sub_content));
	}
	public function actionBrief()
	{   
		$sub_content = $this->renderPartial('/work/brief' ,array(),true);
	    $this->render('index',array('sub_content' =>$sub_content));

	}

	public function actionZhanpin()
	{
		$sub_content = $this->renderPartial('/work/zhanpin' ,array(),true);
	    $this->render('index',array('sub_content' =>$sub_content));
	}

	public function actionWenyi()
	{
		$sub_content = $this->renderPartial('/work/wenyi',array(),true);
	    $this->render('index',array('sub_content' =>$sub_content));
	}

	public function actionDongman()
	{
		$sub_content = $this->renderPartial('/work/dongman' ,array(),true);
	    $this->render('index',array('sub_content' =>$sub_content));
	}

	public function actionWangluo()
	{
		$sub_content = $this->renderPartial('/work/wangluo' ,array(),true);
	    $this->render('index',array('sub_content' =>$sub_content));
	}

	public function actionBaogao()
	{
		$sub_content = $this->renderPartial('/work/baogao' ,array(),true);
	    $this->render('index',array('sub_content' =>$sub_content));
	}

	public function actionView()
	{
		$sub_content = $this->renderPartial('/work/view' ,array(),true);
	    $this->render('subindex',array('sub_content' =>$sub_content));
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