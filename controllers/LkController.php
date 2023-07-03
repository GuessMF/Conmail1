<?php

namespace app\controllers;

class LkController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "lk";
        return $this->render('index');
    }

}
