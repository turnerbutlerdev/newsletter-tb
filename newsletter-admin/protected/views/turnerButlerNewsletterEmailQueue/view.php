<?php
/* @var $this TurnerButlerNewsletterEmailQueueController */
/* @var $model TurnerButlerNewsletterEmailQueue */

$this->breadcrumbs=array(
	'Turner Butler Newsletter Email Queues'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TurnerButlerNewsletterEmailQueue', 'url'=>array('index')),
	array('label'=>'Create TurnerButlerNewsletterEmailQueue', 'url'=>array('create')),
	array('label'=>'Update TurnerButlerNewsletterEmailQueue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TurnerButlerNewsletterEmailQueue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TurnerButlerNewsletterEmailQueue', 'url'=>array('admin')),
);
?>

<h1>View TurnerButlerNewsletterEmailQueue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
		'queue',
		'status',
		'is_sent',
		'is_read',
		'is_unsubscribed',
		'creation_datetime',
		'newsletter_id',
		'email_address',
	),
)); ?>
