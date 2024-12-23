<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblPembeli;

/**
 * TblPembeliSearch represents the model behind the search form of `app\models\TblPembeli`.
 */
class TblPembeliSearch extends TblPembeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pembeli'], 'integer'],
            [['nama_pembeli', 'barang_terjual', 'jumlah_terjual', 'alamat_pembeli'], 'safe'],
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
        $query = TblPembeli::find();

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
            'id_pembeli' => $this->id_pembeli,
        ]);

        $query->andFilterWhere(['like', 'nama_pembeli', $this->nama_pembeli])
            ->andFilterWhere(['like', 'barang_terjual', $this->barang_terjual])
            ->andFilterWhere(['like', 'jumlah_terjual', $this->jumlah_terjual])
            ->andFilterWhere(['like', 'alamat_pembeli', $this->alamat_pembeli]);

        return $dataProvider;
    }
}
