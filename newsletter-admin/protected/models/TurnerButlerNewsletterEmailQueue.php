<?php

/**
 * This is the model class for table "turner_butler_newsletter_email_queue".
 *
 * The followings are the available columns in table 'turner_butler_newsletter_email_queue':
 * @property integer $id
 * @property string $content
 * @property string $queue
 * @property integer $status
 * @property integer $is_sent
 * @property integer $is_read
 * @property integer $is_unsubscribed
 * @property string $creation_datetime
 */
class TurnerButlerNewsletterEmailQueue extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'turner_butler_newsletter_email_queue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' content', 'required'),
			array('id, status, is_sent, is_read, is_unsubscribed', 'numerical', 'integerOnly'=>true),
			array('queue,email_address,newsletter_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, content, queue, status, is_sent, is_read, is_unsubscribed, creation_datetime', 'safe', 'on'=>'search'),
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
			'content' => 'Content',
			'queue' => 'Queue',
			'status' => 'Status',
			'is_sent' => 'Is Sent',
			'is_read' => 'Is Read',
			'is_unsubscribed' => 'Is Unsubscribed',
			'creation_datetime' => 'Creation Datetime',
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
		$criteria->compare('content',$this->content,true);
		$criteria->compare('queue',$this->queue,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('is_sent',$this->is_sent);
		$criteria->compare('is_read',$this->is_read);
		$criteria->compare('is_unsubscribed',$this->is_unsubscribed);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TurnerButlerNewsletterEmailQueue the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
