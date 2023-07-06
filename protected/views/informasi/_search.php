<?php
/* @var $this InformasiController */
/* @var $model Informasi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_informasi'); ?>
		<?php echo $form->textField($model,'id_informasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_informasi'); ?>
		<?php echo $form->textField($model,'nama_informasi',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan_informasi'); ?>
		<?php echo $form->textField($model,'keterangan_informasi',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->