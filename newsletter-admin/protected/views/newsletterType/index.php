<?php
/* @var $this NewsletterTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Newsletter Types',
);

$this->menu=array(
	array('label'=>'Create NewsletterType', 'url'=>array('create')),
	array('label'=>'Manage NewsletterType', 'url'=>array('admin')),
);
?>

<h1>Newsletter Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
