<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Newsletter', 'url'=>array('index')),
	array('label'=>'Create Newsletter', 'url'=>array('create')),
	array('label'=>'Update Newsletter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Newsletter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Newsletter', 'url'=>array('admin')),
);
?>

<h1>View Newsletter (<?php echo $model->name; ?>)</h1>

<?php
$templateList=NewsletterGenerics::getTemplateList();
$typeList=NewsletterGenerics::getNewsletterTypeList();

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        'name',
        array(
            'name'=>'type_id',
            'value'=>(isset($model->type_id)&& !empty($model->type_id) && array_key_exists($model->type_id,$templateList) )?$templateList[$model->type_id]:'--',
        ),
        array(
            'name'=>'template_id',
            'value'=>(isset($model->template_id)&& !empty($model->template_id) && array_key_exists($model->template_id,$typeList) )?$typeList[$model->template_id]:'--',
        ),

		'from_email',
		'failure_email',
        'from_name',
        array(
            'name'=>'hour',
            'header'=>'Time to process',
            'value'=>((isset($model->hour))&&(isset($model->min)))?NewsletterGenerics::convertNumber($model->hour).':'.NewsletterGenerics::convertNumber($model->min):'--',
        ),
        array(
            'name'=>'day',
            'header'=>'Day to process',
            'value'=>((isset($model->day)&& !empty($model->day))&&(isset($model->month)&& !empty($model->month))&&(isset($model->year)&& !empty($model->year)))?NewsletterGenerics::convertNumber($model->day).'/'.NewsletterGenerics::convertNumber($model->month).'/'.NewsletterGenerics::convertNumber($model->year):'--',
        ),
        array(
            'name'=>'is_active',
            'value'=>NewsletterGenerics::liveStatus($model->is_active),
            'type'=>'raw'
        ),
        array(
            'name'=>'is_auth',
            'value'=>NewsletterGenerics::authStatus($model->is_auth),
            'type'=>'raw'
        ),
        array(
            'name'=>'status',
            'value'=>NewsletterGenerics::liveStatus($model->status),
            'type'=>'raw'
        ),
        'creation_datetime',
		array(
		  'name'=>'content',
           'value'=>'<a href="'.Yii::app()->createUrl('newsletter/previewNl',array('templateId'=>$model->template_id,'newsletterId'=>$model->id)).'"  onclick="window.open(this.href,\'targetWindow\',\'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=680,height=600\');return false;">View Newsletter</a>',
            'type'=>'raw'
        )

	),
)); ?>
