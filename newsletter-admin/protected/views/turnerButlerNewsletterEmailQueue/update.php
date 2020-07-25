<?php
/* @var $this TurnerButlerNewsletterEmailQueueController */
/* @var $model TurnerButlerNewsletterEmailQueue */

$this->breadcrumbs=array(
	'Turner Butler Newsletter Email Queues'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TurnerButlerNewsletterEmailQueue', 'url'=>array('index')),
	array('label'=>'Create TurnerButlerNewsletterEmailQueue', 'url'=>array('create')),
	array('label'=>'View TurnerButlerNewsletterEmailQueue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TurnerButlerNewsletterEmailQueue', 'url'=>array('admin')),
);
?>

<h1>Update TurnerButlerNewsletterEmailQueue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>