<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_user'); ?>
		<?php echo $form->textField($model,'nama_user',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nama_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usia_user'); ?>
		<?php echo $form->textField($model,'usia_user',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'usia_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penyakit_user'); ?>
		<?php echo $form->textField($model,'penyakit_user',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'penyakit_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->