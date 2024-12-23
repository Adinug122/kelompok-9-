<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_barang".
 *
 * @property int $id_barang
 * @property string|null $nama_barang
 * @property string|null $harga_barang
 *
 * @property Pembelian[] $pembelians
 */
class TblBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang'], 'required'],
            [['id_barang'], 'integer'],
            [['nama_barang'], 'string', 'max' => 45],
            [['harga_barang'], 'string', 'max' => 20],
            [['id_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'harga_barang' => 'Harga Barang',
        ];
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['id_barang' => 'id_barang']);
    }
}
