<?php
/* @var $this LaporanController */
/* @var $data Laporan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_laporan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_laporan), array('view', 'id'=>$data->id_laporan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_laporan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_laporan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan_laporan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan_laporan); ?>
	<br />


</div>