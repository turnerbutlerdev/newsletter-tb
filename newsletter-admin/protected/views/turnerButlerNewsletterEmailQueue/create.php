<?php
/* @var $this TurnerButlerNewsletterEmailQueueController */
/* @var $model TurnerButlerNewsletterEmailQueue */

$this->breadcrumbs=array(
	'Turner Butler Newsletter Email Queues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TurnerButlerNewsletterEmailQueue', 'url'=>array('index')),
	array('label'=>'Manage TurnerButlerNewsletterEmailQueue', 'url'=>array('admin')),
);
?>

<h1>Create TurnerButlerNewsletterEmailQueue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>