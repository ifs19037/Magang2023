<?php
/* @var $this PendaftaranController */
/* @var $data Pendaftaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pendaftaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pendaftaran), array('view', 'id'=>$data->id_pendaftaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pendaftaran')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pendaftaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_pendaftaran')); ?>:</b>
	<?php echo CHtml::encode($data->pegawai_pendaftaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindakan_pendaftaran')); ?>:</b>
	<?php echo CHtml::encode($data->tindakan_pendaftaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_pendaftaran')); ?>:</b>
	<?php echo CHtml::encode($data->obat_pendaftaran); ?>
	<br />


</div>