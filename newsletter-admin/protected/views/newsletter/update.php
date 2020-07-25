<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Newsletter', 'url'=>array('index')),
	array('label'=>'Create Newsletter', 'url'=>array('create')),
	array('label'=>'View Newsletter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Newsletter', 'url'=>array('admin')),
);
?>

<h1>Update Newsletter (<?php echo $model->name; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>