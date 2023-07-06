<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaksi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transaksi), array('view', 'id'=>$data->id_transaksi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_transaksi')); ?>:</b>
	<?php echo CHtml::encode($data->obat_transaksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_transaksi')); ?>:</b>
	<?php echo CHtml::encode($data->harga_transaksi); ?>
	<br />


</div>