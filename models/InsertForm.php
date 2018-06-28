<?php
namespace app\models; 

use yii\db\ActiveRecord; 
 
class InsertForm extends ActiveRecord 
{
	public static function tableName(){
		return 'users';
	}

	public function attributeLabels(){
		return [
			'username' => 'Enter Name:',
			'email'=>'E-mail',
			'password'=>'Password',
		];
	}
	 	public function rules(){
 		return[
 		 		[['username', 'password','email'], 'required'],];
 	}
    // Метод, который будет вызываться до сохранения данных в БД
//    public function beforeSave($insert)
//    {
//        if(parent::beforeSave())
//        {
//            if($this->isNewRecord)
//            {
//                // Время регистрации
//                $this->dtime_registration = time();
//            }
//
//            return true;
//        }
//    }
}