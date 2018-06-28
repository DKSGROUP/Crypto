<?php

namespace app\models;
namespace yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $userid
 * @property string $username
 * @property string $password
 * @property string $email
 */

class Users extends \yii\db\ActiveRecord
{

    
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            [['username', 'email'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }
    // Метод, который будет вызываться до сохранения данных в БД
    public function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                // Время регистрации
                $this->dtime_registration = time();
            }

            return true;
        }

        return false;
    }
}
