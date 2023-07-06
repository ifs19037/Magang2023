<?php
/* @var $this InformasiController */
/* @var $model Informasi */

$this->breadcrumbs=array(
	'Informasi'=>array('index'),
	$model->id_informasi,
);

$this->menu=array(
	array('label'=>'List Informasi', 'url'=>array('index')),
	array('label'=>'Create Informasi', 'url'=>array('create')),
	array('label'=>'Update Informasi', 'url'=>array('update', 'id'=>$model->id_informasi)),
	array('label'=>'Delete Informasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_informasi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Informasi', 'url'=>array('admin')),
);
?>

<h1>View Informasi #<?php echo $model->id_informasi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_informasi',
		'nama_informasi',
		'keterangan_informasi',
	),
)); ?>
