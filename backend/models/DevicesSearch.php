<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Device;

/**
 * DeviceSearch represents the model behind the search form of `backend\models\Device`.
 */
class DevicesSearch extends Devices
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'status'], 'integer'],
            [['created_at','serial'], 'safe'],
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
        $query = Devices::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 300],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ],
            ],
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
            //  'serial' => $this->serial,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'status' => $this->status,
        ]);

        $terms = preg_split('/\r\n|\r|\n/', $this->serial);
        $terms = preg_split("/\\r\\n|\\r|\\n/", $this->serial);
        foreach ($terms as $key) {
            $query->orFilterWhere( [
                'or',
                [ '=', 'serial', $key ],
            ] );
        }

        return $dataProvider;
    }
}
