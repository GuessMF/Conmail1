<?php

namespace app\controllers;

class PaymentController extends \yii\web\Controller
{
    public $layout = 'lk';
    public function actionIndex()
    {
        return $this->render('index');
    }

}
