<?php

namespace app\controllers;

class InstrumentsController extends \yii\web\Controller {
    public $layout = 'lk';

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionNew() {
        return $this->render('new');
    }

    public function actionDelivery() {
        return $this->render('delivery');
    }
    public function actionReg() {
        return $this->render('reg');
    }

}
