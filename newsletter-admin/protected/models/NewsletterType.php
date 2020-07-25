<?php

/**
 * This is the model class for table "turner_butler_newsletter_type".
 *
 * The followings are the available columns in table 'turner_butler_newsletter_type':
 * @property integer $id
 * @property string $name
 * @property integer $is_active
 * @property integer $is_deleted
 * @property string $creation_datetime
 */
class NewsletterType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public static $arrliveStatus=array('0'=> '<font color="red" style="font-weight: bold;">Not Live</font>','1'=>'<font color="green" style="font-weight: bold;">Live</font>');
	public static $arrFilterliveStatus=array('0'=> 'Not Live','1'=>'Live');
	public static $arrDelStatus=array('0'=> '<font color="green" style="font-weight: bold;">Not Deleted</font>','1'=>'<font color="red" style="font-weight: bold;">Deleted</font>');
	public static $arrFilterDelStatus=array('0'=> 'Not Deleted','1'=>'Deleted');
	public function tableName()
	{
		return 'turner_butler_newsletter_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, creation_datetime', 'required'),
			array('is_active, is_deleted', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, is_active, is_deleted, creation_datetime', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'is_active' => 'Live Status',
			'is_deleted' => 'Deletion Status',
			'creation_datetime' => 'Created on',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_deleted',$this->is_deleted);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsletterType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
