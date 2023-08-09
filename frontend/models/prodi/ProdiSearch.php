<?php

namespace app\models\Prodi;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prodi\Prodi;

/**
 * ProdiSearch represents the model behind the search form of `app\models\Prodi\Prodi`.
 */
class ProdiSearch extends Prodi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jumlah_mhs'], 'integer'],
            [['nama_prodi', 'kaprodi'], 'safe'],
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
        $query = Prodi::find();

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
            'id' => $this->id,
            'jumlah_mhs' => $this->jumlah_mhs,
        ]);

        $query->andFilterWhere(['like', 'nama_prodi', $this->nama_prodi])
            ->andFilterWhere(['like', 'kaprodi', $this->kaprodi]);

        return $dataProvider;
    }
}
