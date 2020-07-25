<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/4/2017
 * Time: 8:05 PM
 */

class NewsletterGenerics {

    public static function getTemplateList(){
        $criteria = new CDbCriteria;
        $criteria->condition = "t.is_active =1 AND t.is_deleted = 0";

        $TemplateAll=Template::model()->findAll();
        //echo '<pre>';print_r($TemplateData);die;

        $templateArray=array();
        foreach ($TemplateAll as $Template){
            /*echo '<pre>';print_r($Template);*/
            $TemplateData=$Template->attributes;
             $templateVal=$TemplateData['id'];
            $templateName=$TemplateData['name'];
            $templateArray[$templateVal]=$templateName;
        }
        return $templateArray;

    }

    public static function getNewsletterTypeList(){
        $criteria = new CDbCriteria;
        $criteria->condition = "t.is_active =1 AND t.is_deleted = 0";

        $NewsletterTypeAll=NewsletterType::model()->findAll();
        //echo '<pre>';print_r($NewsletterTypeData);die;

        $NewsletterTypeArray=array();
        foreach ($NewsletterTypeAll as $NewsletterType){
            /*echo '<pre>';print_r($NewsletterType);*/
            $NewsletterTypeData=$NewsletterType->attributes;
            $NewsletterTypeVal=$NewsletterTypeData['id'];
            $NewsletterTypeName=$NewsletterTypeData['name'];
            $NewsletterTypeArray[$NewsletterTypeVal]=$NewsletterTypeName;
        }
        return $NewsletterTypeArray;

    }

    public static function convertNumber($num){
      return str_pad($num,2,'0',STR_PAD_LEFT);
    }

    public static function liveStatus($status){
        return (isset($status) && $status==1)?'<font color="green" style="font-weight: bold;">Active</font>':'<font color="red" style="font-weight: bold;">Not Active</font>';
    }

 public static function authStatus($status){
        return (isset($status) && $status==1)?'<font color="green" style="font-weight: bold;">Authorized to be Mailed</font>':'<font color="red" style="font-weight: bold;">Not Authorized to be Mailed</font>';
    }

 public static function sendStatus($status){
        return (isset($status) && $status==1)?'<font color="green" style="font-weight: bold;">Newsletter Sent</font>':(($status==2)?'<font color="orange" style="font-weight: bold;">Mails under Process</font>':'<font color="red" style="font-weight: bold;">Newsletter not sent</font>');
    }

    public static function genError($err){

     return '<p style="color: #a94442;background-color: #f2dede;border-color: #ebccd1;padding: 10px;margin: 20px;border-radius: 5px;border: 1px dotted rgba(169, 68, 66, 0.34);">'.$err.'</p>';
    }
  public static function generateNlBody($templateId,$newsletterId){

      $Template=Template::model()->findByPk($templateId);
      if(!$Template){
          echo NewsletterGenerics::genError('No Template found for the selected newsletter.'); die;
      }
      $templateData=$Template->attributes;
      $Newsletter=Newsletter::model()->findByPk($newsletterId);
      $newsletterData=$Newsletter->attributes;

      $templateC=$templateData['content'];
      $newsletterC=$newsletterData['content'];

      $emailC=str_replace("____currentDate",date('D, M j, Y'),$templateC);
      $emailC=str_replace("____content",$newsletterC,$emailC);

      return ($emailC);
 }

    public static function generateNlPreview($templateId,$content){

        $Template=Template::model()->findByPk($templateId);
        $templateData=$Template->attributes;


        $templateC=$templateData['content'];


        $emailC=str_replace("____currentDate",date('D, M j, Y'),$templateC);
        $emailC=str_replace("____content",$content,$emailC);

        return ($emailC);
    }


}