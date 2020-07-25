<?php
/* @var $this NewsletterClientMainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Newsletter Client Mains',
);

$this->menu=array(
	array('label'=>'Create NewsletterClientMain', 'url'=>array('create')),
	array('label'=>'Manage NewsletterClientMain', 'url'=>array('admin')),
);
?>

<h1>Newsletter Client Mains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
