<?php
/* @var $this NewsletterTypeController */
/* @var $model NewsletterType */

$this->breadcrumbs=array(
	'Newsletter Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewsletterType', 'url'=>array('index')),
	array('label'=>'Create NewsletterType', 'url'=>array('create')),
	array('label'=>'View NewsletterType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewsletterType', 'url'=>array('admin')),
);
?>

<h1>Update NewsletterType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>