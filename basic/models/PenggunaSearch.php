<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pengguna;

/**
 * PenggunaSearch represents the model behind the search form of `app\models\pengguna`.
 */
class PenggunaSearch extends pengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan'], 'integer'],
            [['nama_karyawan', 'alamat', 'jenis_kelamin'], 'safe'],
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
        $query = pengguna::find();

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
            'id_karyawan' => $this->id_karyawan,
        ]);

        $query->andFilterWhere(['like', 'nama_karyawan', $this->nama_karyawan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }
}
