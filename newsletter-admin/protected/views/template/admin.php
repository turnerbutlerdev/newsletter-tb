<?php
/* @var $this TemplateController */
/* @var $model Template */

$this->breadcrumbs=array(
	'Templates'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Template', 'url'=>array('index')),
	array('label'=>'Create Template', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#template-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Templates</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'template-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'is_active',
		'is_deleted',
		'creation_datetime',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
