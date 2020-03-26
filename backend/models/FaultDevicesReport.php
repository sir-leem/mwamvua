<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fault_devices_report".
 *
 * @property int $id
 * @property int $serial_no
 * @property int $created_by
 * @property string $created_at
 * @property string|null $remarks
 * @property int $status
 */
class FaultDevicesReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fault_devices_report';
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
            'id' => 'ID',
            'serial_no' => 'Serial No',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'remarks' => 'Remarks',
            'status' => 'Status',
        ];
    }
}
