<?php

/**
 * This is the model class for table "{{template}}".
 *
 * The followings are the available columns in table '{{template}}':
 * @property string $tmid
 * @property integer $iftitle
 * @property integer $ifdes
 * @property integer $ifdespic
 * @property integer $ifcontent
 * @property integer $ifauthor
 * @property integer $ifdate
 * @property integer $ifread_num
 * @property integer $ifbanner
 *
 * The followings are the available model relations:
 * @property Catalog[] $catalogs
 */
class Template extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Template the static model class
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
		return '{{template}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tmid', 'required'),
			array('iftitle, ifdes, ifdespic, ifcontent, ifauthor, ifdate, ifread_num, ifbanner', 'numerical', 'integerOnly'=>true),
			array('tmid', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tmid, iftitle, ifdes, ifdespic, ifcontent, ifauthor, ifdate, ifread_num, ifbanner', 'safe', 'on'=>'search'),
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
			'catalogs' => array(self::HAS_MANY, 'Catalog', 'tmid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tmid' => 'Tmid',
			'iftitle' => 'Iftitle',
			'ifdes' => 'Ifdes',
			'ifdespic' => 'Ifdespic',
			'ifcontent' => 'Ifcontent',
			'ifauthor' => 'Ifauthor',
			'ifdate' => 'Ifdate',
			'ifread_num' => 'Ifread Num',
			'ifbanner' => 'Ifbanner',
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

		$criteria->compare('tmid',$this->tmid,true);
		$criteria->compare('iftitle',$this->iftitle);
		$criteria->compare('ifdes',$this->ifdes);
		$criteria->compare('ifdespic',$this->ifdespic);
		$criteria->compare('ifcontent',$this->ifcontent);
		$criteria->compare('ifauthor',$this->ifauthor);
		$criteria->compare('ifdate',$this->ifdate);
		$criteria->compare('ifread_num',$this->ifread_num);
		$criteria->compare('ifbanner',$this->ifbanner);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}