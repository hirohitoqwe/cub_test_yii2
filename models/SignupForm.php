<?php

namespace app\models;

use app\models\User;
use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такой логин уже занят.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
        $user->role = 1;
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}