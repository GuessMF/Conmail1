<?php

namespace app\controllers;

class MessagesController extends \yii\web\Controller {
    public $layout = 'lk';

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionIndoor() {
        return $this->render('indoor');
    }

    public function actionOutdoor() {
        return $this->render('outdoor');
    }

}
