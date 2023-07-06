<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pendaftaran'); ?>
		<?php echo $form->textField($model,'id_pendaftaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pendaftaran'); ?>
		<?php echo $form->textField($model,'nama_pendaftaran',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pegawai_pendaftaran'); ?>
		<?php echo $form->textField($model,'pegawai_pendaftaran',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindakan_pendaftaran'); ?>
		<?php echo $form->textField($model,'tindakan_pendaftaran',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obat_pendaftaran'); ?>
		<?php echo $form->textField($model,'obat_pendaftaran',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->