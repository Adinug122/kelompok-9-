<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property int|null $id_karyawan
 * @property int|null $id_pembeli
 * @property int|null $id_barang
 * @property int $id_pembelian
 *
 * @property DetailPembelian[] $detailPembelians
 * @property Pengguna $karyawan
 * @property TblPembeli $pembeli
 * @property TblBarang $barang
 */
class Pembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan', 'id_pembeli', 'id_barang', 'id_pembelian'], 'integer'],
            [['id_pembelian'], 'required'],
            [['id_pembelian'], 'unique'],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
            [['id_pembeli'], 'exist', 'skipOnError' => true, 'targetClass' => TblPembeli::className(), 'targetAttribute' => ['id_pembeli' => 'id_pembeli']],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => TblBarang::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'id_pembeli' => 'Id Pembeli',
            'id_barang' => 'Id Barang',
            'id_pembelian' => 'Id Pembelian',
        ];
    }

    /**
     * Gets query for [[DetailPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPembelians()
    {
        return $this->hasMany(DetailPembelian::className(), ['id_pembelian' => 'id_pembelian']);
    }

    /**
     * Gets query for [[Karyawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(Pengguna::className(), ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * Gets query for [[Pembeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembeli()
    {
        return $this->hasOne(TblPembeli::className(), ['id_pembeli' => 'id_pembeli']);
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(TblBarang::className(), ['id_barang' => 'id_barang']);
    }
}
