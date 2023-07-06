<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_transaksi'); ?>
		<?php echo $form->textField($model,'id_transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obat_transaksi'); ?>
		<?php echo $form->textField($model,'obat_transaksi',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_transaksi'); ?>
		<?php echo $form->textField($model,'harga_transaksi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->