<?php
/* @var $this TemplateController */
/* @var $model Template */

$this->breadcrumbs=array(
	'Templates'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Template', 'url'=>array('index')),
	array('label'=>'Create Template', 'url'=>array('create')),
	array('label'=>'Update Template', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Template', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Template', 'url'=>array('admin')),
);
?>

<h1>View Template (<?php echo $model->name; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        array(
            'name'=>'content',
            'value'=>'<a href="javascript:abc();">View Template</a>',
            'type'=>'raw'
        ),
        array(
            'name'=>'is_active',
            'value'=>NewsletterGenerics::liveStatus($model->is_active),
            'type'=>'raw'
        ),
		'is_deleted',
		'creation_datetime',
	),
)); ?>
