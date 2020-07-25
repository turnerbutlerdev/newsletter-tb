<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 4:20 AM
 */

class NewsletterEmailQueueCommand extends CConsoleCommand{


    public function run($arg1=null,$arg2=null){
        ini_set('memory_limit','-1');
        set_time_limit(100000);
        $Template=Template::model()->findByPk($arg1);
        $templateData=$Template->attributes;
        $Newsletter=Newsletter::model()->findByPk($arg2);

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
}