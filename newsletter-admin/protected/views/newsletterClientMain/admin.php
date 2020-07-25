<?php
/* @var $this NewsletterClientMainController */
/* @var $model NewsletterClientMain */

$this->breadcrumbs=array(
	'Manage Clients'=>array('index'),

);

$this->menu=array(
	array('label'=>'List NewsletterClientMain', 'url'=>array('index')),
	array('label'=>'Create NewsletterClientMain', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#newsletter-client-main-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Clients</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div>--><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'newsletter-client-main-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'email_address',
		array(
            'name'=>'newsletter_type_id',
            'filter' => CHtml::activeDropDownList($model,'newsletter_type_id',NewsletterGenerics::getNewsletterTypeList(), array('prompt' => '--- All ---')),
            'value'=>function($data){
                if(isset($data->newsletter_type_id) && array_key_exists($data->newsletter_type_id,NewsletterGenerics::getNewsletterTypeList())){
                   $nArray=NewsletterGenerics::getNewsletterTypeList();
                    echo $nArray[$data->newsletter_type_id];
                }
            }
        ),
		array(
		        'name'=>'status',
                 'filter' => CHtml::activeDropDownList($model,'status',NewsletterClientMain::$arrFilterStatus, array('prompt' => '--- All ---')),
                 'value'=>function($data){
		            if(isset($data->status) && array_key_exists($data->status,NewsletterClientMain::$arrStatus)){
		                echo NewsletterClientMain::$arrStatus[$data->status];
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
