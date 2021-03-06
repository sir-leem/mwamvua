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
    public $company_logo;

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
            [['company_logo'], 'file'],
            [['company_logo'], 'file', 'extensions' => 'png,jpg,jepg','maxSize' => 512000, 'tooBig' => 'Limit is 500KB', 'skipOnEmpty' => true,
                'checkExtensionByMimeType' => false],
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
