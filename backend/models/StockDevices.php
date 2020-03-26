<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_devices".
 *
 * @property int $id
 * @property int $serial_no
 * @property int $created_by
 * @property string $created_at
 * @property int $status
 * @property int|null $location_from
 * @property int|null $view_status
 */
class StockDevices extends \yii\db\ActiveRecord
{
    const available=1;
    const not_deactivated=2;

    public static function getStatus()
    {
        return [
            self::available => Yii::t('app', 'AVAILABLE'),
            self::not_deactivated => Yii::t('app', 'NOT DEACTIVATED'),


        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock_devices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_no', 'created_by', 'created_at', 'status'], 'required'],
            [['serial_no', 'created_by', 'status', 'location_from', 'view_status'], 'integer'],
            [['created_at'], 'safe'],
            [['serial_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'serial_no' => 'Serial No',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'status' => 'Status',
            'location_from' => 'Location From',
            'view_status' => 'View Status',
        ];
    }
}
