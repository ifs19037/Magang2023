<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_user), array('view', 'id'=>$data->id_user)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_user')); ?>:</b>
	<?php echo CHtml::encode($data->nama_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usia_user')); ?>:</b>
	<?php echo CHtml::encode($data->usia_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penyakit_user')); ?>:</b>
	<?php echo CHtml::encode($data->penyakit_user); ?>
	<br />


</div>