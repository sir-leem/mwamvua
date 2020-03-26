<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property int $id
 * @property string $company_name
 * @property string $login_name
 * @property string $mobile
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $created_by
 * @property int $status
 */
class Companies extends \yii\db\ActiveRecord
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_name', 'login_name', 'mobile', 'created_at', 'created_by'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by','status'], 'integer'],
            [['company_name', 'login_name', 'mobile'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'login_name' => 'Login Name',
            'mobile' => 'Mobile',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    public function getBillCustomer()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
