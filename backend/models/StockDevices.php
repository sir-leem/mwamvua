<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_devices".
 *
 * @property int $id
 * @property int $serial_no
 * @property int $created_by
 * @property int $status
 * @property int $view_status
 * @property string $created_at
 * @property string $location_from
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
            [['serial_no', 'created_by', 'created_at'], 'required'],
            [['serial_no', 'created_by','status','view_status','location_from'], 'integer'],
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
            'location_from' => 'Last Trip From',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    public function getBorderPort()
    {
        return $this->hasOne(BorderPort::className(), ['id' => 'location_from']);
    }


    public static function getAvailable()
    {
        $total = StockDevices::find()->where(['status'=>StockDevices::available])->andWhere(['view_status'=>Devices::stock_devices])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableNotDeactivated()
    {
        $total = StockDevices::find()
            ->where(['status'=>StockDevices::not_deactivated])
            ->andWhere(['view_status'=>Devices::stock_devices])
            ->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getStock()
    {
        $awaiting = AwaitingReceive::find()->where(['view_status'=>Devices::awaiting_receive])->count();
        $received = ReceivedDevices::find()->where(['view_status'=>Devices::received_devices])->count();
        $stock = StockDevices::find()->where(['view_status'=>Devices::stock_devices])->count();
        $released = ReleasedDevices::find()->where(['view_status'=>Devices::released_devices])->count();
        $intransit = InTransit::find()->where(['view_status'=>Devices::in_transit])->count();
        $faults = FaultDevices::find()->where(['view_status'=>Devices::fault_devices])->count();
        $total=$awaiting +$received +$stock +$released +$intransit +$faults ;
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function InTransit()
    {

        $date_today = strtotime("-3 day");
        $date_today = date('Y-m-d', $date_today);

        $device=StockDevices::find()
            ->where(['<','date(created_at)',$date_today])
            ->andWhere(['view_status'=>Devices::stock_devices])
            ->andWhere(['status'=>2])
            ->count();

        if ($device > 0) {
            echo $device;
        } else {
            echo 0;
        }
    }

    public static function notAttended()
    {

        $date_today = strtotime("-7 day");
        $date_today = date('Y-m-d', $date_today);

        $device=StockDevices::find()
            ->where(['<','date(created_at)',$date_today])
            ->andWhere(['view_status'=>Devices::stock_devices])
            ->andWhere(['status'=>2])
            ->count();

        if ($device > 0) {
            echo $device;
        } else {
            echo 0;
        }
    }

}
