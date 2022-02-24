<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Elonlar;

/**
 * ElonlarSearch represents the model behind the search form of `common\models\Elonlar`.
 */
class ElonlarSearch extends Elonlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['sarlavha_uz', 'rasm', 'qisqa_uz', 'toliq_uz', 'qisqa_ru', 'toliq_ru', 'qisqa_en', 'toliq_en', 'vaqt', 'sarlavha_ru', 'sarlavha_en'], 'safe'],
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
        $query = Elonlar::find();

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
            'vaqt' => $this->vaqt,
        ]);

        $query->andFilterWhere(['like', 'sarlavha_uz', $this->sarlavha_uz])
            ->andFilterWhere(['like', 'rasm', $this->rasm])
            ->andFilterWhere(['like', 'qisqa_uz', $this->qisqa_uz])
            ->andFilterWhere(['like', 'toliq_uz', $this->toliq_uz])
            ->andFilterWhere(['like', 'qisqa_ru', $this->qisqa_ru])
            ->andFilterWhere(['like', 'toliq_ru', $this->toliq_ru])
            ->andFilterWhere(['like', 'qisqa_en', $this->qisqa_en])
            ->andFilterWhere(['like', 'toliq_en', $this->toliq_en])
            ->andFilterWhere(['like', 'sarlavha_ru', $this->sarlavha_ru])
            ->andFilterWhere(['like', 'sarlavha_en', $this->sarlavha_en]);

        return $dataProvider;
    }
}
