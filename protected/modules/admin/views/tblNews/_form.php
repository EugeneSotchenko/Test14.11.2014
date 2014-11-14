<?php
/* @var $this TblNewsController */
/* @var $model TblNews */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title_ua'); ?>
		<?php echo $form->textField($model,'title_ua',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_ua'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uri'); ?>
		<?php echo $form->textField($model,'uri',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'uri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page'); ?>
		<?php echo $form->textField($model,'page',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'page'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_create'); ?>
		<?php echo $form->textField($model,'data_create'); ?>
		<?php echo $form->error($model,'data_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_modif'); ?>
		<?php echo $form->textField($model,'data_modif'); ?>
		<?php echo $form->error($model,'data_modif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_ua'); ?>
		<?php echo $form->textArea($model,'text_ua',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text_ua'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<?php echo $form->textField($model,'visible'); ?>
		<?php echo $form->error($model,'visible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_links'); ?>
		<?php echo $form->textField($model,'img_links',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img_links'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_ru'); ?>
		<?php echo $form->textField($model,'title_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_ru'); ?>
		<?php echo $form->textArea($model,'text_ru',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_en'); ?>
		<?php echo $form->textField($model,'title_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_en'); ?>
		<?php echo $form->textArea($model,'text_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text_en'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->