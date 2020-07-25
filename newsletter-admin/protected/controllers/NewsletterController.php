<?php

class NewsletterController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
        return array(

            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete','index','view','create','update','newsletterQueueProcess','previewNl','updatePreview'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );

	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Newsletter;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Newsletter']))
		{
			$model->attributes=$_POST['Newsletter'];
			if($model->save())
			   // print_r($model);die;
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Newsletter']))
		{
			$model->attributes=$_POST['Newsletter'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
    public function actionIndex()
    {
        $this->actionAdmin();
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Newsletter('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Newsletter']))
			$model->attributes=$_GET['Newsletter'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Newsletter the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Newsletter::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Newsletter $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='newsletter-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionNewsletterQueueProcess($templateId=null,$newsletterId=null){
	    ini_set('memory_limit','-1');
	    set_time_limit(100000);
	    $Template=Template::model()->findByPk($templateId);
	    $templateData=$Template->attributes;
	    $Newsletter=Newsletter::model()->findByPk($newsletterId);

	    $newsletterData=$Newsletter->attributes;
	    $newsLetterId=$newsletterData['id'];

        $criteria = new CDbCriteria();
        $criteria->addCondition("status=1");
        $criteria->limit=1;
        $NewsletterClientAll=NewsletterClientMain::model()->findAll($criteria);
        $c=0;
        $startTime=date('d-m-Y h:i:sa');
        echo 'Start Time : '.$startTime.'============================================<br><br>';$c=111;
        foreach ($NewsletterClientAll as $NewsletterClient){

            $newsLetterAttributes=$NewsletterClient->attributes;

            $fname=$newsLetterAttributes['first_name'];
            $emailAddress=$newsLetterAttributes['email_address'];
            $templateC=$templateData['content'];
            $newsletterC=$newsletterData['content'];

            $emailC=str_replace("____fname",$fname,$templateC);
            $emailC=str_replace("____currentDate",date('D, M j, Y'),$emailC);
            $emailC=str_replace("____content",$newsletterC,$emailC);
            $emailC=str_replace("____nlLink",'http://newsletter.turnerbutler.co.uk',$emailC);

            $model=new TurnerButlerNewsletterEmailQueue();
            $model->content=$emailC;
            $model->email_address=$emailAddress;
            $model->newsletter_id=$newsLetterId;
            if($model->save()){
                echo 'Email Queue id : '.$model->id.' updated properly,Client Address : '.$emailAddress.'<br><br>';
            }
            else
            {
                print_r( $model->getErrors());
            }
          //  break;

        }
        $endTime=date('d-m-Y h:i:sa');
        echo '<br><br>End Time : '.$endTime.'============================================<br><br>';

    }


    public function actionPreviewNl($templateId,$newsletterId){
       echo NewsletterGenerics::generateNlBody($templateId,$newsletterId);
    }


}
