<?php

namespace app\controllers;

class NewsController extends \yii\web\Controller {

    public $layout = 'lk';
    
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionNew() {
        return $this->render('new');
    }

    public function actionView() {
        return $this->render('view');
    }

}
