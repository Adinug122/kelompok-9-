<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_pembelian".
 *
 * @property int $id_detail
 * @property string|null $barang_terjual
 * @property int|null $jumlah_terjual
 * @property int|null $id_pembelian
 *
 * @property Pembelian $pembelian
 */
class DetailPembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail'], 'required'],
            [['id_detail', 'jumlah_terjual', 'id_pembelian'], 'integer'],
            [['barang_terjual'], 'string', 'max' => 45],
            [['id_detail'], 'unique'],
            [['id_pembelian'], 'exist', 'skipOnError' => true, 'targetClass' => Pembelian::className(), 'targetAttribute' => ['id_pembelian' => 'id_pembelian']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'barang_terjual' => 'Barang Terjual',
            'jumlah_terjual' => 'Jumlah Terjual',
            'id_pembelian' => 'Id Pembelian',
        ];
    }

    /**
     * Gets query for [[Pembelian]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelian()
    {
        return $this->hasOne(Pembelian::className(), ['id_pembelian' => 'id_pembelian']);
    }
}
