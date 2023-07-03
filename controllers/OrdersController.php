<?php

namespace app\controllers;

class OrdersController extends \yii\web\Controller{
    public $layout = "lk";

    public function actionIndex() {

        return $this->render('index');
    }

    public function actionNew() {

        return $this->render('new');
    }

    public function actionDone() {

        return $this->render('done');
    }

}
