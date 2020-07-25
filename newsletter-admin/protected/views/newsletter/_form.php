<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'newsletter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

        <div class="span-6">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name'); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>
        <div class="span-6">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->dropDownList($model,'type_id',NewsletterGenerics::getNewsletterTypeList()); ?>
		<?php echo $form->error($model,'type_id'); ?>
        </div>

<!--	</div>-->

	<div class="span-6">
		<?php echo $form->labelEx($model,'template_id'); ?>
		<?php echo $form->dropDownList($model,'template_id',NewsletterGenerics::getTemplateList()); ?>
		<?php echo $form->error($model,'template_id'); ?>
	</div>

	<div class="span-6">
		<?php echo $form->labelEx($model,'from_email'); ?>
		<?php echo $form->textField($model,'from_email',array('value'=>'marketing@turnerbutler.co.uk','readonly'=>'true')); ?>
		<?php echo $form->error($model,'from_email'); ?>
	</div>

	<div class="span-6">
		<?php echo $form->labelEx($model,'failure_email'); ?>
		<?php echo $form->textField($model,'failure_email',array('value'=>'bounce@turnerbutler.co.uk','readonly'=>'true')); ?>
		<?php echo $form->error($model,'failure_email'); ?>
	</div>
        <div class="span-6" style="display: none;">
            <?php echo $form->labelEx($model,'from_name'); ?>
            <?php echo $form->textField($model,'from_name',array('value'=>'Turner Butler Marketing','readonly'=>'true')); ?>
            <?php echo $form->error($model,'from_name'); ?>
        </div>

	<div class="span-6">
		<?php echo $form->labelEx($model,'hour'); ?>
		<?php
        for($i=0;$i<24;$i++)
        {
            $hour[str_pad($i,2,'0',STR_PAD_LEFT)]=str_pad($i,2,'0',STR_PAD_LEFT);
        }
        echo $form->dropDownList($model,'hour',$hour); ?>
		<?php echo $form->error($model,'hour'); ?>
	</div>

	<div class="span-6">
		<?php echo $form->labelEx($model,'min'); ?>
		<?php
        for($i=0;$i<24;$i++)
        {
            $min[str_pad($i,2,'0',STR_PAD_LEFT)]=str_pad($i,2,'0',STR_PAD_LEFT);;
        }
        echo $form->dropDownList($model,'min',$min); ?>
		<?php echo $form->error($model,'min'); ?>
	</div>

	<div class="span-6">
		<?php echo $form->labelEx($model,'day'); ?>
		<?php
        for($i=1;$i<31;$i++)
        {
            $day[str_pad($i,2,'0',STR_PAD_LEFT)]=str_pad($i,2,'0',STR_PAD_LEFT);
        }
        echo $form->dropDownList($model,'day',$day); ?>
		<?php echo $form->error($model,'day'); ?>
	</div>

	<div class="span-6">
		<?php echo $form->labelEx($model,'month'); ?>
		<?php for($i=1;$i<12;$i++)
        {
            $monthNum  = $i;
            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
            $monthName = $dateObj->format('F');
            $month[$i]=$monthName;
        }
        echo $form->dropDownList($model,'month',$month); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="span-6">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php
        for($i=2017;$i<2020;$i++)
        {
            $year[$i]=$i;
        }
        echo $form->dropDownList($model,'year',$year); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>



	<!--<div class="span-6">
		<?php /*echo $form->labelEx($model,'is_active'); */?>
		<?php /*echo $form->textField($model,'is_active'); */?>
		<?php /*echo $form->error($model,'is_active'); */?>
	</div>

	<div class="span-6">
		<?php /*echo $form->labelEx($model,'is_auth'); */?>
		<?php /*echo $form->textField($model,'is_auth'); */?>
		<?php /*echo $form->error($model,'is_auth'); */?>
	</div>

	<div class="span-6">
		<?php /*echo $form->labelEx($model,'status'); */?>
		<?php /*echo $form->textField($model,'status'); */?>
		<?php /*echo $form->error($model,'status'); */?>
	</div>-->

	<!--<div class="span-6">
		<?php /*echo $form->labelEx($model,'content'); */?>
		<?php /*echo $form->textField($model,'content'); */?>
		<?php /*echo $form->error($model,'content'); */?>
	</div>-->

	<div class="span-6" style="display: none;">
		<?php /*echo $form->labelEx($model,'creation_datetime'); */?>
		<?php echo $form->textField($model,'creation_datetime',array('value'=>date('Y-m-d h:i:s'),'readonly'=>'true')); ?>
		<?php /*echo $form->error($model,'creation_datetime'); */?>
	</div>



</div>
    <div class="row" style="margin-top:150px;" >
        <?php echo $form->textArea($model,'content'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Next  >>' : 'Proceed'); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


