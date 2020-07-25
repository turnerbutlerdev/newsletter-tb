<?php
/* @var $this NewsletterClientMainController */
/* @var $model NewsletterClientMain */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->email_address=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewsletterClientMain', 'url'=>array('index')),
	array('label'=>'Create NewsletterClientMain', 'url'=>array('create')),
	array('label'=>'View NewsletterClientMain', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewsletterClientMain', 'url'=>array('admin')),
);
?>

<h1>Update Newsletter Client ( <?php echo $model->first_name.' '.$model->last_name ; ?> )</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>