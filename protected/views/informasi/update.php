<?php
/* @var $this InformasiController */
/* @var $model Informasi */

$this->breadcrumbs=array(
	'Informasi'=>array('index'),
	$model->id_informasi=>array('view','id'=>$model->id_informasi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Informasi', 'url'=>array('index')),
	array('label'=>'Create Informasi', 'url'=>array('create')),
	array('label'=>'View Informasi', 'url'=>array('view', 'id'=>$model->id_informasi)),
	array('label'=>'Manage Informasi', 'url'=>array('admin')),
);
?>

<h1>Update Informasi <?php echo $model->id_informasi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>