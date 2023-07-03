<?php

namespace app\controllers;

class AdminController extends \yii\web\Controller
{
    public $layout = 'lk';
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionSettings()
    {
        return $this->render('settings');
    }
    public function actionNews()
    {
        return $this->render('news');
    }
    public function actionArticles()
    {
        return $this->render('articles');
    }
    public function actionVacancy()
    {
        return $this->render('vacancy');
    }

}
