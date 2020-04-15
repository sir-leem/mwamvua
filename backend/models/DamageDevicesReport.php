<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "damage_devices_report".
 *
 * @property int $id
 * @property int $serial_no
 * @property int $created_by
 * @property string $created_at
 * @property string|null $remarks
 * @property int $status
 */
class DamageDevicesReport extends \yii\db\ActiveRecord
{
    const DAMAGE_DEVICE =1;

    public static function getArrayStatus()
    {
        return [
            self::DAMAGE_DEVICE => Yii::t('app', 'DAMAGE DEVICE'),

        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'damage_devices_report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_no', 'created_by', 'created_at', 'status'], 'required'],
            [['serial_no', 'created_by', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['remarks'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'serial_no' => Yii::t('app', 'Serial No'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'remarks' => Yii::t('app', 'Remarks'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    public static function getAvailable()
    {
        $total = DamageDevices::find()->where(['view_status'=>Devices::damage_devices])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }


}
