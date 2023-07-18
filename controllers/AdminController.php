<?php

namespace app\controllers;

use app\models\Book;
use app\models\News;
use app\models\SignupForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller
{
    public function actionIndex()
    {
        if (!Yii::$app->authManager->getRolesByUser(Yii::$app->user->id)) {
            $this->goBack();
        }
        $users = User::find()->all();

        return $this->render('index', ['users' => $users]);
    }

}
