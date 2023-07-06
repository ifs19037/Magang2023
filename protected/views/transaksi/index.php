<?php
/* @var $this TransaksiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksis',
);

?>

<h1>Transaksi</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Obat</th>
            <!-- Tambahkan kolom tambahan sesuai kebutuhan -->
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td>1</td>
                <td>Andreas Pakpahan</td>
                <td>Chlorphenamine Maleate</td>
                <!-- Tambahkan kolom tambahan sesuai kebutuhan -->
            </tr>
        
    </tbody>
</table>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
