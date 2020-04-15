<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fault_devices".
 *
 * @property int $id
 * @property int $serial_no
 * @property int $created_by
 * @property int $status
 * @property string $created_at
 * @property string $remarks
 *
 * @property User $createdBy
 */
class FaultDevices extends \yii\db\ActiveRecord
{
    const fault_device = 1;
    const damage_device = 2;


    public static function getStatus()
    {
        return [
            self::fault_device => Yii::t('app', 'FAULT DEVICE'),
            self::damage_device => Yii::t('app', 'DAMAGE DEVICE'),

        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fault_devices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_no', 'created_by', 'created_at', ], 'required'],
            [['serial_no', 'created_by','status'], 'integer'],
            [['created_at'], 'safe'],
            [['remarks'], 'string'],
            [['serial_no'], 'unique'],
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
            'serial_no' => 'Serial No',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'remarks' => 'Remarks',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    public static function getAvailable()
    {
        $total = FaultDevices::find()->where(['view_status'=>Devices::fault_devices])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }

    public static function getAvailableDamage()
    {
        $total = FaultDevices::find()->where(['view_status'=>Devices::damage_devices])->count();
        if ($total > 0) {
            echo $total;
        } else {
            echo 0;
        }
    }


}
