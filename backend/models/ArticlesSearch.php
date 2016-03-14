<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Articles;

/**
 * ArticlesSearch represents the model behind the search form about `common\models\Articles`.
 */
class ArticlesSearch extends Articles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'userId', 'created_at', 'updated_at', 'published', 'deleted', 'sequenceNumber'], 'integer'],
            [['title', 'description', 'text'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Articles::find()->orderBy(['sequenceNumber' => SORT_ASC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'userId' => $this->userId,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'published' => $this->published,
            'deleted' => $this->deleted,
            'sequenceNumber' => $this->sequenceNumber,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
