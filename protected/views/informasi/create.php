<?php
/* @var $this InformasiController */
/* @var $model Informasi */

$this->breadcrumbs=array(
	'Informasi'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Informasi', 'url'=>array('index')),
	array('label'=>'Manage Informasi', 'url'=>array('admin')),
);
?>

<h1>Create Informasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>