<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
$this->registerCssFile(Yii::$app->homeUrl . "css/style.css");
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="/images/logo.png" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400">Авторизация</h4>
                        <hr>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="Email" placeholder="Email ">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" id="Password" placeholder="Пароль">
                        </div>
                        <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Запомнить меня</label>
                        </div>
                        <button class="btn btn-block btn-primary mb-4">Войти</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
