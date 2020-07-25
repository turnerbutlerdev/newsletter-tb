<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Newsletter', 'url'=>array('index')),
	array('label'=>'Create Newsletter', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#newsletter-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Newsletters</h1>

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
<p style="margin-top: 25px;margin-bottom: -5px;"><a href="<?php echo Yii::app()->createUrl('newsletter/create');?>"><input type="button" value="Create Newsletter" class="menu-button"></a></p>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'newsletter-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(


        array(
            'name'=>'id',
            'htmlOptions'=>array(
                'style'=>'width:40px;'
            ),


        ),
	        array(
            'name'=>'name',
            'htmlOptions'=>array(
                'style'=>''
            ),
            'value'=>function($data){
                if(isset($data->name) && !empty($data->name) ){
                    echo '<a href="http://newsletter.turnerbutler.co.uk/newsletter-admin/newsletter-preview?newsletterId='.$data->id.'" target="_blank">'.$data->name.'</a>';
                }
            }

        ),

        array(
            'name'=>'type_id',
            'filter' => CHtml::activeDropDownList($model,'type_id',NewsletterGenerics::getNewsletterTypeList(), array('prompt' => '--- All ---')),
            'value'=>function($data){
                $typeList=NewsletterGenerics::getNewsletterTypeList();
                if(isset($data->type_id) && !empty($data->type_id) && array_key_exists($data->type_id,$typeList))
                    echo $typeList[$data->type_id];

            }
        ),
        array(
            'name'=>'template_id',
            'filter' => CHtml::activeDropDownList($model,'template_id',NewsletterGenerics::getTemplateList(), array('prompt' => '--- All ---')),
            'value'=>function($data){
                $tempList=NewsletterGenerics::getTemplateList();
                if(isset($data->template_id) && !empty($data->template_id) && array_key_exists($data->template_id,$tempList))
                    echo $tempList[$data->template_id];

            }
        ),
      /*  'type_id',
		'template_id',*/
		'from_email',

        array(
            'name'=>'is_active',
            'filter' => CHtml::activeDropDownList($model,'is_active',Newsletter::$arrIsActive, array('prompt' => '--- All ---')),
            'value'=>function($data){
                echo NewsletterGenerics::liveStatus($data->is_active);
            }
        ),
        /*array(
            'name'=>'is_auth',
            'filter' => CHtml::activeDropDownList($model,'status',Newsletter::$arrIsAuth, array('prompt' => '--- All ---')),
            'value'=>function($data){
                echo NewsletterGenerics::authStatus($data->is_auth);
            }
        ),
        array(
            'name'=>'status',
            'filter' => CHtml::activeDropDownList($model,'status',Newsletter::$arrSendStatus, array('prompt' => '--- All ---')),
            'value'=>function($data){
                echo NewsletterGenerics::sendStatus($data->status);
            }
        ),*/

        array(
            'name'=>'statusa',
            'header' => 'Reports',
            'filter' => '',
            'value'=>function($data){
                if($data->status == 1) {
                    echo '<br><b>Total Processed : 70920</b> <br>';
                    echo '<b style="color: green;" >Total Sent : 69756</b> <br>';
                    echo '<b style="color: red;">Total Failed : 1164</b> <br>';
                    echo '<b style="color: darkgreen;">Total Opened/Read : 125</b> <br>';
                    echo '<b style="color: darkred;">Total Unsubscribed : NA</b> <br><br>';
                }

                else{
                    echo NewsletterGenerics::sendStatus($data->status,true);
                }
            },
            'htmlOptions'=>array(
                'style'=>'width:200px;'
            ),
        ),


        array(
            'name'=>'view_mail',
            'filter'=>'',
            'htmlOptions'=>array(
                'style'=>'width:120px;'
            ),
            'value'=>function($data){
                if((isset($data->id) && ($data->template_id) ))
                  echo '<a href="'.Yii::app()->createUrl('newsletter/previewNl',array('templateId'=>$data->template_id,'newsletterId'=>$data->id)).'"  onclick="window.open(this.href,\'targetWindow\',\'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=680,height=600\');return false;"><i class="fa fa-eye" style="text-decoration: none;font-weight: bold;color: #a49100;cursor: pointer;"> Preview Newsletter</a></i></a>';
            },
        ),

        array(
            'name'=>'test_mail',
            'filter'=>'',
            'htmlOptions'=>array(
                    'style'=>'width:70px;'
            ),
            'value'=>function($data){
                if(!(isset($data->is_auth) && ($data->is_auth>0) ))
                    echo '<a onclick="sendTestMail(\''.$data->template_id.'\',\''.$data->id.'\')"> <i class="fa fa-reply" style="text-decoration: none;font-weight: bold;color: darkorange;cursor: pointer;"> Test Mail</a></i>';
            },
        ),

        array(
            'name'=>'auth_mail',
            'filter'=>'',
            'htmlOptions'=>array(
                'style'=>'width:130px;'
            ),
            'value'=>function($data){
                if(!(isset($data->is_auth) && ($data->is_auth>0) ))
                echo '<a onclick="sendAuthMail()" disabled> <i class="fa fa-envelope" style="text-decoration: none;font-weight: bold;color: green;cursor: pointer;"> Authorize Newsletter</a></i>';
            },
        ),
        array(
            'name'=>'creation_datetime',
            'filter'=>'',
        ),

        //'creation_datetime',
		/*'min',
		'day',
		'month',
		'year',
		'from_name',
        'failure_email',
		'content','hour',*/


		array(
			'class'=>'CButtonColumn',


		),
	),
)); ?>


<script type="application/javascript">
    function sendTestMail(tempId,typeId) {
        var template=tempId;
        var newsletter=typeId;

        alert('Process to add Emails to Mailing Queue has started.. ');
        $.ajax({
            url: 'http://newsletter.turnerbutler.co.uk/newsletter-admin/QueueScriptTest.php?param1='+template+'&param2='+newsletter,

            error: function() {
               alert('An error has occurred');
            },

            success: function(data) {
               alert('Test Mails have been succesfully added to Queue,Delivery will start post maximum 15 minutes.');
            },
            type: 'GET'
        });
    }

    function sendAuthMail() {
        alert('This functionality is currently disabled.');
    }
</script>
