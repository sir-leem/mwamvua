<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StockDevices;

/**
 * StockDevicesSearch represents the model behind the search form of `backend\models\StockDevices`.
 */
class StockDevicesSearch extends StockDevices
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'status', 'location_from', 'view_status'], 'integer'],
            [['created_at','serial_no'], 'safe'],
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
        $query = StockDevices::find();
        $query->where(['status'=>StockDevices::available])
            ->andWhere(['view_status'=>Devices::stock_devices]);
        // add conditions that should always apply here

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 300],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_ASC,
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
            'serial_no' => $this->serial_no,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'status' => $this->status,
            'location_from' => $this->location_from,
            'view_status' => $this->view_status,
        ]);


        return $dataProvider;
    }

    public function searchAvailable($params)
    {
        $query = StockDevices::find();
        //->where(['status'=>StockDevices::available])
        //    ->andWhere(['view_status'=>Devices::stock_devices]);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 300],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_ASC,
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
            // 'serial_no' => $this->serial_no,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'status' => StockDevices::available,
            'location_from' => $this->location_from,
            'view_status' =>Devices::stock_devices,
        ]);

        $terms = preg_split("/\\r\\n|\\r|\\n/", $this->serial_no);
        $query->andFilterWhere(['in', 'serial_no', $terms]);

        return $dataProvider;
    }

    public function searchActive($params)
    {
        $query = StockDevices::find();
        $query->where(['status'=>StockDevices::not_deactivated])
            ->andWhere(['view_status'=>Devices::stock_devices]);
        // add conditions that should always apply here

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
            'serial_no' => $this->serial_no,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'status' => $this->status,
            'location_from' => $this->location_from,
            'view_status' => $this->view_status,
        ]);

        return $dataProvider;
    }

    public function searchClean($params)
    {
        $query = StockDevices::find();

        // add conditions that should always apply here

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
            // 'serial_no' => $this->serial_no,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'status' => StockDevices::not_deactivated,
            'location_from' => $this->location_from,
            'view_status' => Devices::stock_devices,
        ]);

        $terms = preg_split("/\\r\\n|\\r|\\n/", $this->serial_no);
        $query->andFilterWhere(['in', 'serial_no', $terms]);

        return $dataProvider;
    }
}
