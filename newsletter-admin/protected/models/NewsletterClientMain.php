<?php

/**
 * This is the model class for table "turner_butler_newsletter_client_main".
 *
 * The followings are the available columns in table 'turner_butler_newsletter_client_main':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property integer $newsletter_type_id
 * @property integer $status
 * @property string $creation_datetime
 */
class NewsletterClientMain extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public static $arrStatus=array('1'=>'<font color="green" style="font-weight:bold;">Subscribed</font>','0'=>'<font color="red" style="font-weight:bold;">Unsubscribed</font>');
	public static $arrFilterStatus=array('1'=>'Subscribed','0'=>'Unsubscribed');
	public static $enumStatus=array('subscribe'=>'1','unsubscribe'=>'0');

	public function tableName()
	{
		return 'turner_butler_newsletter_client_main';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email_address, newsletter_type_id, creation_datetime', 'required'),
			array('newsletter_type_id, status', 'numerical', 'integerOnly'=>true),
			array('email_address', 'length', 'max'=>255),
			array('first_name, last_name', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, email_address, newsletter_type_id, status, creation_datetime', 'safe', 'on'=>'search'),
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
			'id' => 'Client ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email_address' => 'Email Address',
			'newsletter_type_id' => 'Newsletter Type',
			'status' => 'Status',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('newsletter_type_id',$this->newsletter_type_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsletterClientMain the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
