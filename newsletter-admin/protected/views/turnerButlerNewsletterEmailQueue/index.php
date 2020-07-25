<?php
/* @var $this TurnerButlerNewsletterEmailQueueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Turner Butler Newsletter Email Queues',
);

$this->menu=array(
	array('label'=>'Create TurnerButlerNewsletterEmailQueue', 'url'=>array('create')),
	array('label'=>'Manage TurnerButlerNewsletterEmailQueue', 'url'=>array('admin')),
);
?>

<h1>Turner Butler Newsletter Email Queues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
