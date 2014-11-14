<?php
/* @var $this YoutubeController */
/* @var $model Youtube */

$this->breadcrumbs=array(
	'Youtubes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Youtube', 'url'=>array('index')),
	array('label'=>'Manage Youtube', 'url'=>array('admin')),
);
?>

<h1>Create Youtube</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>