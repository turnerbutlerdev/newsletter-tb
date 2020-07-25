<?php
/* @var $this TurnerButlerNewsletterEmailQueueController */
/* @var $data TurnerButlerNewsletterEmailQueue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('queue')); ?>:</b>
	<?php echo CHtml::encode($data->queue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_sent')); ?>:</b>
	<?php echo CHtml::encode($data->is_sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_read')); ?>:</b>
	<?php echo CHtml::encode($data->is_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_unsubscribed')); ?>:</b>
	<?php echo CHtml::encode($data->is_unsubscribed); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('newsletter_id')); ?>:</b>
	<?php echo CHtml::encode($data->newsletter_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />

	*/ ?>

</div>