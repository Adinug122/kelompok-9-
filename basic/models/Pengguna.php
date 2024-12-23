<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id_karyawan
 * @property string|null $nama_karyawan
 * @property string|null $alamat
 * @property string|null $jenis_kelamin
 *
 * @property Mengelompokan[] $mengelompokans
 * @property Pembelian[] $pembelians
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan'], 'required'],
            [['id_karyawan'], 'integer'],
            [['nama_karyawan', 'jenis_kelamin'], 'string', 'max' => 100],
            [['alamat'], 'string', 'max' => 50],
            [['id_karyawan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama_karyawan' => 'Nama Karyawan',
            'alamat' => 'Alamat',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }

    /**
     * Gets query for [[Mengelompokans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMengelompokans()
    {
        return $this->hasMany(Mengelompokan::className(), ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['id_karyawan' => 'id_karyawan']);
    }
}
