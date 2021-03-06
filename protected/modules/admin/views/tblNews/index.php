<?php
/* @var $this TblNewsController */
/* @var $model TblNews */

$this->breadcrumbs=array(
	'Tbl News'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblNews', 'url'=>array('index')),
	array('label'=>'Create TblNews', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl News</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title_ua',
		'description',
		'uri',
		'page',
		'data_create',
		/*
		'data_modif',
		'text_ua',
		'lang',
		'visible',
		'img_links',
		'title_ru',
		'text_ru',
		'title_en',
		'text_en',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
