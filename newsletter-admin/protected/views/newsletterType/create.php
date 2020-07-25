<?php
/* @var $this NewsletterTypeController */
/* @var $model NewsletterType */

$this->breadcrumbs=array(
	'Newsletter Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewsletterType', 'url'=>array('index')),
	array('label'=>'Manage NewsletterType', 'url'=>array('admin')),
);
?>

<h1>Create NewsletterType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>