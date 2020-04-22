<?php

namespace backend\models;

use app\models\Company;
use Yii;

/**
 * This is the model class for table "sales_trips".
 *
 * @property int $id
 * @property string $sale_date
 * @property string $tzl
 * @property string|null $start_date_time
 * @property string $vehicle_number
 * @property string|null $chasis_number
 * @property string $driver_name
 * @property int $border_id
 * @property int|null $trip_status
 * @property string $driver_number
 * @property int $serial_no
 * @property float $amount
 * @property string|null $currency
 * @property int $gate_number
 * @property string $company
 * @property string|null $end_date
 * @property int $sales_person
 * @property string $receipt_number
 * @property string|null $passport
 * @property string|null $container_number
 * @property string|null $vehicle_type_id
 * @property string|null $customer_type_id
 * @property string|null $company_name
 * @property string|null $customer_name
 * @property string|null $agent
 * @property int|null $cancelled_by
 * @property int|null $edited_by
 * @property string|null $edited_at
 * @property string|null $date_cancelled
 * @property string|null $sale_type
 * @property string|null $sale_id
 * @property string|null $customer_id
 */
class SalesTrips extends \yii\db\ActiveRecord
{

    const CASH = 1;
    const CREDIT = 2;

    const NORMAL = 1;
    const EDITED = 2;
    const CANCELED = 3;

    public static function getTripStatus()
    {
        return [
            self::NORMAL => Yii::t('app', 'NORMAL'),
            self::EDITED => Yii::t('app', 'EDITED'),
            self::CANCELED => Yii::t('app', 'CANCELED'),

        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales_trips';
    }
    public static function getArrayStatus()
    {
        return [
            self::CASH => Yii::t('app', 'CASH'),
            self::CREDIT => Yii::t('app', 'CREDIT'),

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //  [['sale_date', 'tzl', 'vehicle_number', 'driver_name', 'border_id', 'driver_number', 'serial_no', 'amount', 'gate_number', 'sales_person', 'receipt_number'], 'required'],
            [['sale_date', 'start_date_time', 'end_date', 'edited_at', 'date_cancelled'], 'safe'],
            [['border_id', 'customer_id','trip_status', 'serial_no', 'gate_number', 'sales_person', 'cancelled_by', 'edited_by','sale_type','sale_id'], 'integer'],
            //  [['amount'], 'number'],
            [['tzl', 'chasis_number', 'currency', 'customer_type_id', 'customer_name'], 'string', 'max' => 200],
            [['vehicle_number', 'driver_name', 'driver_number', 'receipt_number', 'passport', 'container_number', 'company_name', 'agent'], 'string', 'max' => 255],
            [['vehicle_type_id'], 'string', 'max' => 100],
            [['tzl'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sale_date' => 'Sale Date',
            'tzl' => 'Tzl',
            'start_date_time' => 'Start Date Time',
            'vehicle_number' => 'Vehicle Number',
            'chasis_number' => 'Chasis Number',
            'driver_name' => 'Driver Name',
            'border_id' => 'Border ID',
            'trip_status' => 'Trip Status',
            'driver_number' => 'Driver Number',
            'serial_no' => 'Serial No',
            'amount' => 'Amount',
            'currency' => 'Currency',
            'gate_number' => 'Gate Number',
            'end_date' => 'End Date',
            'sales_person' => 'Sales Person',
            'receipt_number' => 'Receipt Number',
            'passport' => 'Passport',
            'container_number' => 'Container Number',
            'vehicle_type_id' => 'Vehicle Type ID',
            'customer_type_id' => 'Customer Type ID',
            'company_name' => 'Company Name',
            'customer_name' => 'Customer Name',
            'agent' => 'Agent',
            'cancelled_by' => 'Cancelled By',
            'edited_by' => 'Edited By',
            'edited_at' => 'Edited At',
            'date_cancelled' => 'Date Cancelled',
        ];
    }

    public function getBorderPort()
    {
        return $this->hasOne(BorderPort::className(), ['id' => 'border_id']);
    }

    public function getPort()
    {
        return $this->hasOne(BorderPort::className(), ['id' => 'gate_number']);
    }
    public function getCustomer()
    {
        return $this->hasOne(Companies::className(), ['id' => 'customer_id']);
    }

    public function getSalesPerson()
    {
        return $this->hasOne(User::className(), ['id' => 'sales_person']);
    }
    public function getEditedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'edited_by']);
    }
    public function getCanceledBy()
    {
        return $this->hasOne(User::className(), ['id' => 'cancelled_by']);
    }

    public static function getAvailableTunduma()
    {
        $total = SalesTrips::find()->where(['border_id'=>1])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableKasumulu()
    {
        $total = SalesTrips::find()->where(['border_id'=>2])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableKabanga()
    {
        $total = SalesTrips::find()->where(['border_id'=>3])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableRusumo()
    {
        $total = SalesTrips::find()->where(['border_id'=>5])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableMtukula()
    {
        $total = SalesTrips::find()->where(['border_id'=>4])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }
}
