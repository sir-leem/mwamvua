<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "received_devices".
 *
 * @property int $id
 * @property int $serial_no
 * @property int $received_from
 * @property int|null $border_port
 * @property int|null $received_from_staff
 * @property string $received_at
 * @property int|null $received_status
 * @property string|null $remark
 * @property int $received_by
 * @property int|null $view_status
 */
class ReceivedDevices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'received_devices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_no', 'received_from', 'received_at', 'received_by'], 'required'],
            [['serial_no', 'received_from', 'border_port', 'received_from_staff', 'received_status', 'received_by', 'view_status'], 'integer'],
            [['received_at'], 'safe'],
            [['remark'], 'string'],
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
            'received_from' => 'Received From',
            'border_port' => 'Border Port',
            'received_from_staff' => 'Received From Staff',
            'received_at' => 'Received At',
            'received_status' => 'Received Status',
            'remark' => 'Remark',
            'received_by' => 'Received By',
            'view_status' => 'View Status',
        ];
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


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'received_by']);
    }

    public static function getAvailable()
    {
        $total = ReceivedDevices::find()->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }


    public static function getActive()
    {
        $awaiting = AwaitingReceive::find()->where(['view_status'=>Devices::awaiting_receive])->count();
        $received = ReceivedDevices::find()->where(['view_status'=>Devices::received_devices])->count();
        $stock = StockDevices::find()->where(['view_status'=>Devices::stock_devices])->count();
        $released = ReleasedDevices::find()->where(['view_status'=>Devices::released_devices])->count();
        $intransit = InTransit::find()->where(['view_status'=>Devices::in_transit])->count();

        $total=$awaiting +$received +$stock +$released +$intransit ;
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }
}
