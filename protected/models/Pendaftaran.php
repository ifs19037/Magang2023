<?php

/**
 * This is the model class for table "pendaftaran".
 *
 * The followings are the available columns in table 'pendaftaran':
 * @property integer $id_pendaftaran
 * @property string $nama_pendaftaran
 * @property string $pegawai_pendaftaran
 * @property string $tindakan_pendaftaran
 * @property string $obat_pendaftaran
 */
class Pendaftaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pendaftaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_pendaftaran, pegawai_pendaftaran, tindakan_pendaftaran, obat_pendaftaran', 'required'),
			array('nama_pendaftaran, pegawai_pendaftaran, tindakan_pendaftaran, obat_pendaftaran', 'length', 'max'=>250),
			array('obat_pendaftaran', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pendaftaran, nama_pendaftaran, pegawai_pendaftaran, tindakan_pendaftaran, obat_pendaftaran', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pendaftaran' => 'Id Pendaftaran',
			'nama_pendaftaran' => 'Nama Pasien',
			'pegawai_pendaftaran' => 'Dokter yang menangani',
			'tindakan_pendaftaran' => 'Tindakan',
			'obat_pendaftaran' => 'Obat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_pendaftaran',$this->id_pendaftaran);
		$criteria->compare('nama_pendaftaran',$this->nama_pendaftaran,true);
		$criteria->compare('pegawai_pendaftaran',$this->pegawai_pendaftaran,true);
		$criteria->compare('tindakan_pendaftaran',$this->tindakan_pendaftaran,true);
		$criteria->compare('obat_pendaftaran',$this->obat_pendaftaran,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pendaftaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
