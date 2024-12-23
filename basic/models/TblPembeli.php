<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pembeli".
 *
 * @property int $id_pembeli
 * @property string|null $nama_pembeli
 * @property string|null $barang_terjual
 * @property string|null $jumlah_terjual
 * @property string|null $alamat_pembeli
 *
 * @property Pembelian[] $pembelians
 */
class TblPembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pembeli'], 'required'],
            [['id_pembeli'], 'integer'],
            [['nama_pembeli'], 'string', 'max' => 30],
            [['barang_terjual', 'jumlah_terjual'], 'string', 'max' => 20],
            [['alamat_pembeli'], 'string', 'max' => 50],
            [['id_pembeli'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembeli' => 'Id Pembeli',
            'nama_pembeli' => 'Nama Pembeli',
            'barang_terjual' => 'Barang Terjual',
            'jumlah_terjual' => 'Jumlah Terjual',
            'alamat_pembeli' => 'Alamat Pembeli',
        ];
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['id_pembeli' => 'id_pembeli']);
    }
}
