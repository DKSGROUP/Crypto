<?php

namespace app\models;

use Yii;
use yii\base\Model;

class MailerForm extends Model
{
    //public $fromEmail;
    public $Username;
    //public $toEmail;
    public $Email;
    public $Write;

    public function rules()
    {
        return [
            [[/*'fromEmail',*/ 'Username', /*'toEmail',*/ 'Email', 'Write'], 'required'],
            //['fromEmail', 'email'],
            //['toEmail', 'email']
        ];
    }

    public function sendEmail()
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                //->setTo($this->toEmail)
               // ->setFrom([$this->fromEmail => $this->fromName])
                ->setTo('')
                ->setFrom(['' => $this->Username])
                ->setSubject($this->Email)
                ->setTextBody($this->Write)
                ->send();

            return true;
        }
        return 
        false;
    }
    
}