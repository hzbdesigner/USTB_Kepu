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
 * @property string $cid
 * @property string $content
 * @property string $des
 *
 * The followings are the available model relations:
 * @property Column $c
 * @property Catalog $catalog
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
			//array('catalog_id, title, despic, date, read_num, author, cid, content, des', 'required'),
			array('read_num', 'numerical', 'integerOnly'=>true),
			array('catalog_id, title, despic, author, cid', 'length', 'max'=>255),
			array('des', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('article_id, catalog_id, title, despic, date, read_num, author, cid, content, des', 'safe', 'on'=>'search'),
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
			'c' => array(self::BELONGS_TO, 'Column', 'cid'),
			'catalog' => array(self::BELONGS_TO, 'Catalog', 'catalog_id'),
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
			'cid' => 'Cid',
			'content' => 'Content',
			'des' => 'Des',
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
		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('des',$this->des,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}