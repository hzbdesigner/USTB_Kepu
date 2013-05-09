<?php

class StrengthController extends Controller
{
	public $layout='main';
	public function actionIndex($column_id,$catalog_id)
	{	
		//article
		// echo $column_id;
		// echo $catalog_id;
		$criteria = new CDbCriteria;
		$criteria->order='article_id DESC';
		$criteria->addCondition("column_id='$column_id'");
		if($catalog_id !=="all"){
			$criteria->addCondition("catalog_id='$catalog_id'");
		}
		$models=Article::model()->findAll($criteria);
		$count=Article::model()->count($criteria);
		// echo $count;
		// if ($models) {
		// 	echo 'models is ture';
		// } else {
		// 	echo 'models is none';
		// }
		

		//$catalogs=$column->catalogs;
		$this->render('index',array('models'=>$models));

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