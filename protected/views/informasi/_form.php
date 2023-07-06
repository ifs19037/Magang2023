<?php
/* @var $this InformasiController */
/* @var $model Informasi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informasi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_informasi'); ?>
		<?php echo $form->textField($model,'nama_informasi',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nama_informasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan_informasi'); ?>
		<?php echo $form->textField($model,'keterangan_informasi',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'keterangan_informasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->