<?php
/* @var $this NewsletterTypeController */
/* @var $model NewsletterType */

$this->breadcrumbs=array(
	'Newsletter Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List NewsletterType', 'url'=>array('index')),
	array('label'=>'Create NewsletterType', 'url'=>array('create')),
	array('label'=>'Update NewsletterType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NewsletterType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewsletterType', 'url'=>array('admin')),
);
?>

<h1>View NewsletterType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'is_active',
		'is_deleted',
		'creation_datetime',
	),
)); ?>
