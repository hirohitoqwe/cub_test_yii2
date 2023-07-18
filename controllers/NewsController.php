<?php

namespace app\controllers;

use app\models\Book;
use app\models\News;
use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $news = News::find()->orderBy("id")->all();
        return $this->render('index', ['newss' => $news]);
    }

}
