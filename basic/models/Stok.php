<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stok".
 *
 * @property int $id_stok
 * @property string|null $tanggal_restock
 * @property string|null $total_harga
 * @property string|null $jumlah_barang
 */
class Stok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stok'], 'required'],
            [['id_stok'], 'integer'],
            [['tanggal_restock'], 'safe'],
            [['total_harga', 'jumlah_barang'], 'string', 'max' => 15],
            [['id_stok'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_stok' => 'Id Stok',
            'tanggal_restock' => 'Tanggal Restock',
            'total_harga' => 'Total Harga',
            'jumlah_barang' => 'Jumlah Barang',
        ];
    }
}
