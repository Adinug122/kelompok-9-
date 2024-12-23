<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\stok;

/**
 * StokSearch represents the model behind the search form of `app\models\stok`.
 */
class StokSearch extends stok
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stok'], 'integer'],
            [['tanggal_restock', 'total_harga', 'jumlah_barang'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = stok::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_stok' => $this->id_stok,
            'tanggal_restock' => $this->tanggal_restock,
        ]);

        $query->andFilterWhere(['like', 'total_harga', $this->total_harga])
            ->andFilterWhere(['like', 'jumlah_barang', $this->jumlah_barang]);

        return $dataProvider;
    }
}
