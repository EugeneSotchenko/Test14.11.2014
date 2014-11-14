<?php
/* @var $this YoutubeController */
/* @var $model Youtube */

$this->breadcrumbs=array(
	'Youtubes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Youtube', 'url'=>array('index')),
	array('label'=>'Create Youtube', 'url'=>array('create')),
	array('label'=>'View Youtube', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Youtube', 'url'=>array('admin')),
);
?>

<h1>Update Youtube <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>