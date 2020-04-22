<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "automation_settings".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $hours
 */
class AutomationSettings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'automation_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'hours'], 'required'],
            [['hours'], 'integer'],
            [['name', 'code'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'hours' => Yii::t('app', 'Hours'),
        ];
    }
}
