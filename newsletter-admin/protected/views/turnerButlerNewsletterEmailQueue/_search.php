<?php
/* @var $this TurnerButlerNewsletterEmailQueueController */
/* @var $model TurnerButlerNewsletterEmailQueue */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'queue'); ?>
		<?php echo $form->textArea($model,'queue',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_sent'); ?>
		<?php echo $form->textField($model,'is_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_read'); ?>
		<?php echo $form->textField($model,'is_read'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_unsubscribed'); ?>
		<?php echo $form->textField($model,'is_unsubscribed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creation_datetime'); ?>
		<?php echo $form->textField($model,'creation_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'newsletter_id'); ?>
		<?php echo $form->textField($model,'newsletter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_address'); ?>
		<?php echo $form->textArea($model,'email_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->