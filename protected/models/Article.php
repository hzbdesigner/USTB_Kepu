<?php

/**
 * This is the model class for table "{{article}}".
 *
 * The followings are the available columns in table '{{article}}':
 * @property integer $article_id
 * @property string $catalog_id
 * @property string $title
 * @property string $despic
 * @property string $date
 * @property integer $read_num
 * @property string $author
 * @property string $column_id
 * @property string $content
 * @property string $des
 * @property string $banner
 *
 * The followings are the available model relations:
 * @property Catalog $catalog
 * @property Column $column
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('catalog_id, title, despic, date, author, column_id, content, des, banner', 'required'),
			array('read_num', 'numerical', 'integerOnly'=>true),
			array('catalog_id, title, despic, author, column_id, banner', 'length', 'max'=>255),
			array('des', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('article_id, catalog_id, title, despic, date, read_num, author, column_id, content, des, banner', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'catalog' => array(self::BELONGS_TO, 'Catalog', 'catalog_id'),
			'column' => array(self::BELONGS_TO, 'Column', 'column_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'article_id' => 'Article',
			'catalog_id' => 'Catalog',
			'title' => 'Title',
			'despic' => 'Despic',
			'date' => 'Date',
			'read_num' => 'Read Num',
			'author' => 'Author',
			'column_id' => 'Column',
			'content' => 'Content',
			'des' => 'Des',
			'banner' => 'Banner',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('catalog_id',$this->catalog_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('despic',$this->despic,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('read_num',$this->read_num);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('column_id',$this->column_id,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('des',$this->des,true);
		$criteria->compare('banner',$this->banner,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}