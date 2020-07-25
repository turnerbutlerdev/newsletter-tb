<?php
/* @var $this NewsletterClientMainController */
/* @var $model NewsletterClientMain */

$this->breadcrumbs=array(
	'Newsletter Client Mains'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NewsletterClientMain', 'url'=>array('index')),
	array('label'=>'Create NewsletterClientMain', 'url'=>array('create')),
	array('label'=>'Update NewsletterClientMain', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NewsletterClientMain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewsletterClientMain', 'url'=>array('admin')),
);
?>

<h1>View NewsletterClientMain #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'email_address',
		'newsletter_type_id',
		'status',
		'creation_datetime',
	),
)); ?>
