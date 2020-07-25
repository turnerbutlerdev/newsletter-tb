<?php
/* @var $this NewsletterTypeController */
/* @var $model NewsletterType */

$this->breadcrumbs=array(
	'Newsletter Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NewsletterType', 'url'=>array('index')),
	array('label'=>'Create NewsletterType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#newsletter-type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Newsletter Types</h1>
<p style="margin-top: 25px;margin-bottom: -5px;"><a href="<?php echo Yii::app()->createUrl('newsletterType/create');?>"><input type="button" value="Create Newsletter Type" class="menu-button"></a></p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'newsletter-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
        array(
            'name'=>'is_active',
            'filter' => CHtml::activeDropDownList($model,'is_active',NewsletterType::$arrFilterliveStatus, array('prompt' => '--- All ---')),
            'value'=>function($data){
                $statusArr=NewsletterType::$arrliveStatus;
                if(isset($data->is_active) && array_key_exists($data->is_active,$statusArr)){
                    echo $statusArr[$data->is_active];
                }
            }
        ),
        array(
            'name'=>'is_deleted',
            'filter' => CHtml::activeDropDownList($model,'is_deleted',NewsletterType::$arrFilterDelStatus, array('prompt' => '--- All ---')),
            'value'=>function($data){
                $statusArr=NewsletterType::$arrDelStatus;
                if(isset($data->is_deleted) && array_key_exists($data->is_deleted,$statusArr)){
                    echo $statusArr[$data->is_deleted];
                }
            }
        ),
		array(
		        'name'=>'creation_datetime',
                'filter'=>''
        ),
		array(
			'class'=>'CButtonColumn',
            'template'=>'{update}'
		),
	),
)); ?>
