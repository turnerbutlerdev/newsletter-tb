<?php
/* @var $this TurnerButlerNewsletterEmailQueueController */
/* @var $model TurnerButlerNewsletterEmailQueue */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turner-butler-newsletter-email-queue-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'queue'); ?>
		<?php echo $form->textArea($model,'queue',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'queue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_sent'); ?>
		<?php echo $form->textField($model,'is_sent'); ?>
		<?php echo $form->error($model,'is_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_read'); ?>
		<?php echo $form->textField($model,'is_read'); ?>
		<?php echo $form->error($model,'is_read'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_unsubscribed'); ?>
		<?php echo $form->textField($model,'is_unsubscribed'); ?>
		<?php echo $form->error($model,'is_unsubscribed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creation_datetime'); ?>
		<?php echo $form->textField($model,'creation_datetime'); ?>
		<?php echo $form->error($model,'creation_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newsletter_id'); ?>
		<?php echo $form->textField($model,'newsletter_id'); ?>
		<?php echo $form->error($model,'newsletter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<?php echo $form->textArea($model,'email_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'email_address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->