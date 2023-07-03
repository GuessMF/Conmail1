<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.png')]);
$this->registerCssFile(Yii::$app->homeUrl . "css/style.css");
$this->registerJsFile(Yii::$app->homeUrl . "js/pcoded.js", ['depends' => [\yii\web\JqueryAsset::className()]]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="utf-8">
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column">
<!-- <body class="d-flex flex-column h-100"> -->
<?php $this->beginBody() ?>
<!--<header id="header">
    <?php
/*    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                . Html::beginForm(['/site/logout'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'nav-link btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
        ]
    ]);
    NavBar::end();
    */?>
</header>
<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php /*if (!empty($this->params['breadcrumbs'])): */?>
            <?php /*= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) */?>
        <?php /*endif */?>
        <?php /*= Alert::widget() */?>
        <?php /*= $content */?>
    </div>
</main>
-->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="/images/user/avatar-2.jpg" alt="Полуэкт Святоговров">
                    <div class="user-details">
                        <span>Полуэкт Святоговров</span>
                        <div id="more-details">Оператор ОТК<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>Посмотреть профиль</a></li>
                        <li class="list-group-item"><a href="javascript:void(0)"><i class="feather icon-settings m-r-5"></i>Настройки</a></li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Выход</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Администратор</label>
                </li>
                <li class="nav-item">
                    <a href="/admin/settings" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Настройки</span></a>
                </li>
                <li class="nav-item">
                    <a href="/reports" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Отчёты</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:void(0)" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Статическая информация</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="/admin/news">Новости</a></li>
                        <li><a href="/admin/vacancy">Вакансии</a></li>
                        <li><a href="/admin/articles">Статьи</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Заказы</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <li class="nav-item">
                        <a href="/orders/new" class="nav-link "><span class="pcoded-micon"><i class="feather icon-star-on"></i></span><span class="pcoded-mtext">Новые</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="javascript:void(0)" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">В работе</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="/specifications">Спецификации</a></li>
                        <li><a href="/instruments">В процессе регистрации инструмента</a></li>
                        <li><a href="/sharpening">В процессе в процессе заточки</a></li>
                        <li><a href="/coating">В процессе покрытия</a></li>
                        <li><a href="/instruments/new">В процессе создания</a></li>
                        <li><a href="/instruments/delivery">В пути</a></li>
                        <li><a href="/orders/done">Готовы к отгузке</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sliders"></i></span><span class="pcoded-mtext">Инструменты</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:void(0)" class="nav-link "><span class="pcoded-micon"><i class="feather icon-tablet"></i></span><span class="pcoded-mtext">Наряды</span></a>
                    <ul class="pcoded-submenu">
                        <li class="nav-item">
                            <a href="/sharpening/new"><span>Наряды на заточку</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/coating/new"><span>Наряды на покрытие</span></a>
                        </li>

                    </ul>
                <li class="nav-item pcoded-menu-caption">
                    <label>Новости</label>
                </li>
                <li class="nav-item">
                    <a href="/news" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Новости</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Общение</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                <li class="nav-item">
                    <a href="/messages/indoor" class="nav-link "><span class="pcoded-micon"><i class="feather icon-phone-incoming"></i></span><span class="pcoded-mtext">Внутреннее</span></a>
                </li>
                <li class="nav-item">
                    <a href="/messages/outdoor" class="nav-link "><span class="pcoded-micon"><i class="feather icon-phone-outgoing"></i></span><span class="pcoded-mtext">Внешнее</span></a>
                </li>
<!--  -->
<!-- font-family: "Open Sans", sans-serif; -->


            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">


    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="javascript:void(0)"><span></span></a>
        <a href="javascript:void(0)" class="b-brand">
            <img src="/images/logo.png" alt="" class="logo">
            <img src="/images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="javascript:void(0)" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="javascript:void(0)" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Поиск">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown" aria-expanded="true">
                        Инструменты
                    </a>
                    <div class="dropdown-menu profile-notification ">
                        <ul class="pro-body">
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> Новые</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> В работе</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> Списки параметов</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown mega-menu">
                    <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                        Заявки
                    </a>
                    <div class="dropdown-menu profile-notification ">
                        <div class="row no-gutters">
                            <div class="col">
                                <h6 class="mega-title">Заявки</h6>
                                <ul class="pro-body">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> Новые</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> В работе</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> На уточнении</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> Ожидают оплаты</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> Готовы к отгрузке</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-circle"></i> Архив</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">Спецификации</h6>
                                <ul class="pro-body">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-minus"></i> Все</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-minus"></i> Новые</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-minus"></i> На согласовании</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-minus"></i> Согласованы</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-minus"></i> Ожидают</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-minus"></i> Архив</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">Наряды</h6>
                                <ul class="pro-body">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-mail"></i> На заточку</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-clipboard"></i> На покрытие</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-check-square"></i> Ожидание</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-image"></i> Сборка</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-help-circle"></i> Помощь</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">Документы</h6>
                                <ul class="pro-body">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-file-plus"></i> Спецификации</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-file-minus"></i> Счета</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-calendar"></i> Наряды</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-upload-cloud"></i> Файлы</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-scissors"></i> Фотографии</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded ='true'>
                        <i class="icon feather icon-bell"></i>
                        <span class="badge badge-pill badge-danger">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Уведомления</h6>
                            <div class="float-right">
                                <a href="javascript:void(0)" class="m-r-10">Прочитанные</a>
                                <a href="javascript:void(0)">Очистить</a>
                            </div>
                        </div>
                        <ul class="noti-body">
                            <li class="n-title">
                                <p class="m-b-0">Новые уведомления</p>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Инна Волосова</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 мин</span></p>
                                        <p>Новый билет добавлен</p>
                                    </div>
                                </div>
                            </li>
                            <li class="n-title">
                                <p class="m-b-0">Предыдущие</p>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Герасим Котов</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 мин</span></p>
                                        <p>Выставлен счёт</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Инна Волосова</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 мин</span></p>
                                        <p>Захожу</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="noti-footer">
                            <a href="javascript:void(0)">Показать все</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded ='true'>
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>Инна Волосова</span>
                            <a href="auth-signin.html" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Профиль</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> Сообщения</a></li>
                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Заблокировать экран</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>

 <!-- <main id="mainPage" class="flex-shrink-0" role="main">  -->
  <!-- <main id="mainPage" role="main">   -->
        <?= Alert::widget() ?>
<div class="pcoded-main-container" style="width: 100%">
    <div class="pcoded-content">
        <?= $content ?>
    </div>
</div>
    <!-- </div> -->
<!-- </main> -->
<!-- Required Js -->
<script src="/js/vendor-all.min.js"></script>
<!--<script src="/js/plugins/bootstrap.min.js"></script>-->
<!--<script src="/js/pcoded.js"></script>-->

<!-- Apex Chart -->
<script src="/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="/js/pages/dashboard-main.js"></script>

<script src="/js/header.js"></script>
<script src="/js/chart-apex.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
