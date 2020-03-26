<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "released_devices".
 *
 * @property int $id
 * @property int $serial_no
 * @property string $released_date
 * @property int|null $released_by
 * @property int|null $released_to
 * @property int|null $transferred_from
 * @property int|null $transferred_to
 * @property string|null $transferred_date
 * @property int $status
 * @property int $sales_point
 * @property int $transferred_by
 */
class ReleasedDevices extends \yii\db\ActiveRecord
{

    const RELEASED=1;
    const TRANSFERRED=2;

    public static function getStatus()
    {
        return [
            self::RELEASED => Yii::t('app', 'RELEASED DEVICE'),
            self::TRANSFERRED => Yii::t('app', 'TRANSFERRED'),


        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'released_devices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_no', 'released_date'], 'required'],
            [['serial_no','transferred_by', 'released_by', 'released_to', 'transferred_from', 'transferred_to', 'status','sales_point'], 'integer'],
            [['released_date', 'transferred_date'], 'safe'],
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
            'released_date' => 'Released Date',
            'released_by' => 'Released By',
            'released_to' => 'Released To',
            'sales_point' => 'Sales Point',
            'transferred_from' => 'Transferred From',
            'transferred_to' => 'Transferred To',
            'transferred_date' => 'Transferred Date',
            'status' => 'Status',
        ];
    }

    public function getReleased0()
    {
        return $this->hasOne(User::className(), ['id' => 'released_by']);
    }

    public function getReleasedTo0()
    {
        return $this->hasOne(User::className(), ['id' => 'released_to']);
    }

    public function getTransferred0()
    {
        return $this->hasOne(User::className(), ['id' => 'transferred_from']);
    }

    public function getTransferredTo0()
    {
        return $this->hasOne(User::className(), ['id' => 'transferred_to']);
    }

    public function getBorderPort()
    {
        return $this->hasOne(BorderPort::className(), ['id' => 'sales_point']);
    }


    public static function getAvailable()
    {
        $total = ReleasedDevices::find()->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableGateTwo()
    {
        $total = ReleasedDevices::find()->where(['sales_point'=>12])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableGateThree()
    {
        $total = ReleasedDevices::find()->where(['sales_point'=>13])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableGateFive()
    {
        $total = ReleasedDevices::find()->where(['sales_point'=>14])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }
    public static function getAvailableGateMalawi()
    {
        $total = ReleasedDevices::find()->where(['sales_point'=>15])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableGateCargo()
    {
        $total = ReleasedDevices::find()->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableGateKicd()
    {
        $total = ReleasedDevices::find()->where(['sales_point'=>16])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }
}
