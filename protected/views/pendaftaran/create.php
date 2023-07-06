<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */

$this->breadcrumbs=array(
	'Pendaftaran'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pendaftaran', 'url'=>array('index')),
	array('label'=>'Manage Pendaftaran', 'url'=>array('admin')),
);
?>

<h1>Form Pendaftaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>