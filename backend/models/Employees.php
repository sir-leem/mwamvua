<?php

namespace backend\models;

use Yii;



/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string $name
 * * @property resource $image
 * @property string $mobile
 * @property string|null $address
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 */
class Employees extends \yii\db\ActiveRecord
{

    const ACTIVE = 1;
    const INACTIVE = 0;

    public $employee_image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mobile', 'status', 'created_at', 'created_by'], 'required'],
            [['status', 'created_by'], 'integer'],
            [['employee_image'], 'file'],
            [['employee_image'], 'file', 'extensions' => 'png,jpg,jepg','maxSize' => 512000, 'tooBig' => 'Limit is 500KB', 'skipOnEmpty' => true,
                'checkExtensionByMimeType' => false],
            [['created_at','employee_image'], 'safe'],
            [['image',], 'string'],
            [['name', 'mobile', 'address'], 'string', 'max' => 200],
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
            'image' => 'Image',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
