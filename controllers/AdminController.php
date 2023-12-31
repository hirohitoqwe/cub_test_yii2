<?php

namespace app\controllers;

use app\models\Book;
use app\models\EditForm;
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
    public function beforeAction($action)
    {
        if (!Yii::$app->authManager->checkAccess(Yii::$app->user->id, 'admin')) {
            return $this->goBack();
        }
        return true;
    }

    public function actionIndex()
    {
        $users = User::find()->all();

        return $this->render('index', ['users' => $users]);
    }

    public function actionCreate()
    {
        if (Yii::$app->request->post()) {
            $data = Yii::$app->request->post()["CreateForm"];
            $news = new News();
            $news->news_headline = $data["news_headline"];
            $news->news_text = $data["news_text"];
            $news->save();
            return $this->redirect('/news');
        }
    }

    public function actionEdit($id)
    {
        $model = new EditForm();
        $news = News::findOne($id);
        return $this->render('edit', ['model' => $model, 'oldNews' => $news]);
    }

    public function actionUpdate($id)
    {
        if (Yii::$app->request->post()) {
            $data = Yii::$app->request->post()["EditForm"];
            $oldNews = News::findOne($id);
            $oldNews->news_headline = $data['news_headline'];
            $oldNews->news_text = $data['news_text'];
            $oldNews->save();
            return $this->redirect('/news');
        }
    }
}
