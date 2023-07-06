<?php
/* @var $this PendaftaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pendaftaran',
);

$this->menu=array(
	array('label'=>'Create Pendaftaran', 'url'=>array('create')),
	array('label'=>'Manage Pendaftaran', 'url'=>array('admin')),
);
?>

<h1>Pendaftaran</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
