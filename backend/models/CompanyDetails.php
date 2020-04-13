<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "company_details".
 *
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property string $tin
 * @property string|null $website
 * @property string $address
 * @property resource|null $logo
 */
class CompanyDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mobile', 'email', 'tin', 'address'], 'required'],
            [['logo'], 'string'],
            [['name', 'email', 'tin', 'website', 'address'], 'string', 'max' => 200],
            [['mobile'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'tin' => 'Tin',
            'website' => 'Website',
            'address' => 'Address',
            'logo' => 'Logo',
        ];
    }
}
