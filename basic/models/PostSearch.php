<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostSearch represents the model behind the search form about `app\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'date', 'category_id', 'activity'], 'integer'],
            [['text', 'title', 'abridgment'], 'safe'],
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

        $query = Post::find();

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
            'author_id' => $this->author_id,
            'date' => $this->date,
            'category_id' => $this->category_id,
            'activity' => $this->activity,
        ]);

        $query->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'abridgment', $this->abridgment]);

        return $dataProvider;
    }

    public function searchForIndex ()
    {
    	$post = (new \yii\db\Query())
		    ->select([])
		    ->from('post')
		    ->limit(7)
		    ->all();

	    return $post;
    }

    public function phraseOfDay ()
    {
        $phrases = (new \yii\db\Query())
            ->select([])
            ->from('phrase_of_day')
            ->limit(5)
            ->orderBy(['id_phrase' => SORT_DESC])
            ->all();

        return $phrases;
    }

    public function getPostById ($id)
    {
    	$post =  (new \yii\db\Query())
		    ->select([])
		    ->from('post')
		    ->where(['post_id' => $id])
		    ->all();

    	return $post[0];
    }
}
