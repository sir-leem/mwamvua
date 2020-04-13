<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "devices".
 *
 * @property int $id
 * @property int $serial
 * @property int $created_by
 * @property string $created_at
 * @property int $status
 *
 * @property int $received_from
 * @property int|null $border_port
 * @property int|null $received_from_staff

 * @property string|null $remark

 *
 * @property User $createdBy
 * @property FaultDevices[] $faultDevices
 * @property StockDevices[] $stockDevices
 */
class Devices extends \yii\db\ActiveRecord
{

    const awaiting_receive = 1;
    const received_devices = 2;
    const stock_devices = 3;
    const released_devices = 4;
    const in_transit = 5;
    const fault_devices = 6;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'devices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial', 'created_by','received_from','border_port', 'created_at'], 'required'],
            [['serial',], 'unique'],
            [['created_by','received_from', 'border_port', 'received_from_staff', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['remark'], 'string'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'serial' => 'Serial',
            'received_from' => 'Received From',
            'border_port' => 'Border Port',
            'received_from_staff' => 'Received From Staff',
            'remark' => 'Remark',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaultDevices()
    {
        return $this->hasMany(FaultDevices::className(), ['device_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockDevices()
    {
        return $this->hasMany(StockDevices::className(), ['serial_no' => 'serial']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBorderPort()
    {
        return $this->hasOne(BorderPort::className(), ['id' => 'border_port']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'received_from']);
    }


}
