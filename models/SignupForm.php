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
        $user->generateAuthKey();
        $user->save(false);
        $auth = \Yii::$app->authManager;
        $authRole = $auth->getRole('user');
        $auth->assign($authRole, $user->getId());
        /*  Если пользователь будет администратором
         *  $auth = \Yii::$app->authManager;
         *  $authRole = $auth->getRole('admin');
         *  $auth->assign($authRole, $user->getId());
         */
        return  $user;
    }
}