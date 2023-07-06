<?php
/* @var $this InformasiController */
/* @var $data Informasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informasi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_informasi), array('view', 'id'=>$data->id_informasi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_informasi')); ?>:</b>
	<?php echo CHtml::encode($data->nama_informasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan_informasi')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan_informasi); ?>
	<br />


</div>