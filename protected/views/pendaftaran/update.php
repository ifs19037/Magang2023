<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */

$this->breadcrumbs=array(
	'Pendaftaran'=>array('index'),
	$model->id_pendaftaran=>array('view','id'=>$model->id_pendaftaran),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pendaftaran', 'url'=>array('index')),
	array('label'=>'Create Pendaftaran', 'url'=>array('create')),
	array('label'=>'View Pendaftaran', 'url'=>array('view', 'id'=>$model->id_pendaftaran)),
	array('label'=>'Manage Pendaftaran', 'url'=>array('admin')),
);
?>

<h1>Update Pendaftaran <?php echo $model->id_pendaftaran; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>