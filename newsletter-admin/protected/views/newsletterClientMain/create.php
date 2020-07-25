<?php
/* @var $this NewsletterClientMainController */
/* @var $model NewsletterClientMain */

$this->breadcrumbs=array(
	'Newsletter Client Mains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewsletterClientMain', 'url'=>array('index')),
	array('label'=>'Manage NewsletterClientMain', 'url'=>array('admin')),
);
?>

<h1>Create NewsletterClientMain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>