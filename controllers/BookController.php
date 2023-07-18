<?php

namespace app\controllers;

use app\models\Book;
use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class BookController extends Controller
{
    public function actionIndex()
    {
        $books = Book::find()->orderBy("id")->all();
        return $this->render('index', ['books' => $books]);
    }

}
