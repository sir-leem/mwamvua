<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property int|null $user_id
 * @property int|null $employee_id
 * @property int|null $company_id
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property string $role
 * @property int|null $user_type
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 *
 * @property Employees $user
 */
class User extends \common\models\User
{
    const SUPER_ADMIN=0;
    const ADMIN = 1;
    const OFFICE_STAFF = 2;
    const PORT_STAFF= 3;
    const BORDER_STAFF= 4;
    const BILL_STAFF= 5;

    const STATUS_ACTIVE=10;
    const STATUS_INACTIVE=1;
    const STATUS_DELETED=0;

    public $password;
    public $repassword;
    private $_statusLabel;
    private $_roleLabel;
    private $role_name;


    /**
     * @inheritdoc
     */
    public function getStatusLabel()
    {
        if ($this->_statusLabel === null) {
            $statuses = self::getStatus();
            $this->_statusLabel = $statuses[$this->status];
        }
        return $this->_statusLabel;
    }

    public static function getStatus()
    {
        return [
            self::STATUS_ACTIVE => Yii::t('app', 'STATUS_ACTIVE'),
            self::STATUS_INACTIVE => Yii::t('app', 'STATUS_INACTIVE'),
            self::STATUS_DELETED => Yii::t('app', 'STATUS_DELETED'),

        ];
    }

    public static function getUserType()
    {
        if( Yii::$app->user->identity->user_type == User::SUPER_ADMIN){

            return [
                self::SUPER_ADMIN => Yii::t('app', 'Super Administrator'),
                self::ADMIN => Yii::t('app', 'Administrator'),
                self::OFFICE_STAFF => Yii::t('app', 'Office Staff'),
                self::PORT_STAFF => Yii::t('app', 'Port Staff'),
                self::BORDER_STAFF => Yii::t('app', 'Border Staff'),
                self::BILL_STAFF => Yii::t('app', 'Bill Customer'),

            ];

        }else{

            return [
                self::ADMIN => Yii::t('app', 'Administrator'),
                self::OFFICE_STAFF => Yii::t('app', 'Office Staff'),
                self::PORT_STAFF => Yii::t('app', 'Port Staff'),
                self::BORDER_STAFF => Yii::t('app', 'Border Staff'),
                self::BILL_STAFF => Yii::t('app', 'Bill Customer'),

            ];

        }


    }

    public static function getUserTypeBillCustomer()
    {
            return [

                self::BILL_STAFF => Yii::t('app', 'Bill Customer'),

            ];

    }



    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'role', 'created_at', 'updated_at'], 'required'],
            [['employee_id','company_id', 'user_type', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password', 'repassword'], 'trim'],
            [['password', 'repassword'], 'string', 'min' => 4, 'max' => 30],
            [[ 'email'], 'unique'],
            [[ 'username'], 'unique'],
            ['username', 'string', 'min' => 3, 'max' => 30],
            ['email', 'string', 'max' => 100],
            ['role', 'string', 'max' => 100],

            ['repassword', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'employee_id' => 'Employee ID',
            'user_type' => 'User Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return [
            'default' => ['username', 'password', 'repassword', 'status', 'role','user_type','email',],
            'createUser' => ['username', 'password', 'repassword', 'status', 'user_type','role','email',],
            'admin-update' => ['username', 'password', 'repassword', 'status', 'user_type','role']
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord || (!$this->isNewRecord && $this->password)) {
                $this->setPassword($this->password);
                $this->generateAuthKey();
                $this->generatePasswordResetToken();
            }
            return true;
        }
        return false;
    }

    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }
        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public static function getRules()
    {
        if(Yii::$app->user->identity->user_type == User::SUPER_ADMIN){

            return ArrayHelper::map(AuthItem::find()->where(['type'=>"1"])->all(),'name','name');

        }else{

            return ArrayHelper::map(AuthItem::find()->where(['type'=>"1"])->andWhere(['!=', 'name', 'SuperAdministrator'])->all(),'name','name');

        }

    }

    public static function getRulesBillCompany()
    {

            return ArrayHelper::map(AuthItem::find()->where(['type'=>"1"])->andwhere(['name'=>'Bill_Customer'])->all(),'name','name');

    }

    public static function getAllUser()
    {
        return ArrayHelper::map(User::find()->where(['!=', 'user_type', User::SUPER_ADMIN])->all(),'id','username');
    }

    public static function getCreditCustomer()
    {
        return ArrayHelper::map(User::find()->where(['in','user_type',5])->all(),'id','username');
    }

    public static function getAllPortStaff()
    {
        return ArrayHelper::map(User::find()->where(['in', 'user_type', User::PORT_STAFF])->all(),'id','username');
    }

    public static function getOfficeStaffAndAdmin()
    {
        return ArrayHelper::map(User::find()->where(['in', 'user_type', User::OFFICE_STAFF])->orwhere(['in', 'user_type', User::ADMIN])->all(),'id','username');
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Employees::className(), ['id' => 'user_id']);
    }

    public static function getRuleManagement()
    {
        return ArrayHelper::map(AuthItem::find()->where(['type'=> 1,])->all(),'name','name');
    }

/**
     * Gets query for [[UserEmployees]].
     *
     * @return \yii\db\ActiveQuery
     */

    public static function getBorderUser()
    {
        return ArrayHelper::map(User::find()->where(['in','user_type',[4]])->all(),'id','username');
    }

    public static function getBorderPortUser()
    {
        return ArrayHelper::map(User::find()->where(['in','user_type',[3,4]])->all(),'id','username');
    }

}
