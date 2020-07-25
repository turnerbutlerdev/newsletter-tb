<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Newsletter', 'url'=>array('index')),
	array('label'=>'Manage Newsletter', 'url'=>array('admin')),
);
?>

<h1>Create Newsletter</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>