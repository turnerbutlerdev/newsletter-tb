<?php

/**
 * This is the model class for table "turner_butler_newsletter".
 *
 * The followings are the available columns in table 'turner_butler_newsletter':
 * @property integer $id
 * @property integer $type_id
 * @property integer $template_id
 * @property string $from_email
 * @property string $failure_email
 * @property integer $hour
 * @property integer $min
 * @property integer $day
 * @property integer $month
 * @property integer $year
 * @property string $from_name
 * @property integer $is_active
 * @property integer $is_auth
 * @property integer $status
 * @property string $content
 * @property string $creation_datetime
 */
class Newsletter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public static $arrSendStatus=array('0'=>'Newsletter not sent','2'=>'Mails under Process','1'=>'Newsletter Sent');
	public static $arrIsAuth=array('0'=>'Not Authorized to be Mailed','1'=>'Authorized to be Mailed');
	public static $arrIsActive=array('0'=>'Not Active','1'=>'Active');
	public function tableName()
	{
		return 'turner_butler_newsletter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type_id, template_id, from_email, failure_email, hour, min, day, month, year, content, creation_datetime,name', 'required'),
			array('type_id, template_id, hour, min, day, month, year, is_active, is_auth, status', 'numerical', 'integerOnly'=>true),
			array('from_name', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('name,id, type_id, template_id, from_email, failure_email, hour, min, day, month, year, from_name, is_active, is_auth, status, content, creation_datetime', 'safe', 'on'=>'search'),
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
			'type_id' => 'Newsletter Type',
			'name' => 'Newsletter Name',
			'template_id' => 'Newsletter Template',
			'from_email' => 'From Email',
			'failure_email' => 'Failure Email',
			'hour' => 'Hour',
			'min' => 'Min',
			'day' => 'Day',
			'month' => 'Month',
			'year' => 'Year',
			'from_name' => 'From Name',
			'is_active' => 'Live Status',
			'is_auth' => 'Authorization Status',
			'status' => 'Send Status',
			'content' => 'Content',
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
		$criteria->compare('name',$this->name);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('template_id',$this->template_id);
		$criteria->compare('from_email',$this->from_email,true);
		$criteria->compare('failure_email',$this->failure_email,true);
		$criteria->compare('hour',$this->hour);
		$criteria->compare('min',$this->min);
		$criteria->compare('day',$this->day);
		$criteria->compare('month',$this->month);
		$criteria->compare('year',$this->year);
		$criteria->compare('from_name',$this->from_name,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_auth',$this->is_auth);
		$criteria->compare('status',$this->status);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Newsletter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
