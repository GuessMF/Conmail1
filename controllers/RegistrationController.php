<?php

namespace app\controllers;

class RegistrationController extends \yii\web\Controller
{
    public $layout = 'lk';
    public function actionIndex()
    {
        return $this->render('index');
    }

}
