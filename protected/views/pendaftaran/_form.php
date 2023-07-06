<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
use yii\helpers\ArrayHelper;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pendaftaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pendaftaran'); ?>
		<?php echo $form->textField($model,'nama_pendaftaran',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nama_pendaftaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pegawai_pendaftaran'); ?>
		<?php
			$pegawaiList = CHtml::listData(pegawai::model()->findAll(), 'id_pegawai', 'jabatan_pegawai');
			$pegawaiList = array_merge(array('' => 'Pilih Pegawai'), $pegawaiList);
			echo $form->dropDownList($model, 'pegawai_pendaftaran', $pegawaiList);
		?>
		<?php echo $form->error($model,'pegawai_pendaftaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tindakan_pendaftaran'); ?>
		<?php
			$tindakanList = CHtml::listData(tindakan::model()->findAll(), 'id_tindakan', 'nama_tindakan');
			$tindakanList = array_merge(array('' => 'Pilih Tindakan'), $tindakanList);
			echo $form->dropDownList($model, 'tindakan_pendaftaran', $tindakanList);
		?>
		<?php echo $form->error($model,'tindakan_pendaftaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obat_pendaftaran'); ?>
		<?php echo $form->dropDownList($model, 'obat_pendaftaran', CHtml::listData(Obat::model()->findAll(), 'id_obat', 'nama_obat'), array('empty' => 'Pilih Obat')); ?>
		<?php echo $form->error($model,'obat_pendaftaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->