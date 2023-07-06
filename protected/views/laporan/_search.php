<?php
/* @var $this LaporanController */
/* @var $model Laporan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_laporan'); ?>
		<?php echo $form->textField($model,'id_laporan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_laporan'); ?>
		<?php echo $form->textField($model,'nama_laporan',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan_laporan'); ?>
		<?php echo $form->textField($model,'keterangan_laporan',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->