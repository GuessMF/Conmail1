<?php
/** @var yii\web\View $this */
?>
<!-- <h1>Отчёты</h1> -->

<!-- <p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p> -->


<div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Отчеты</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Администратор</a></li>
                            <li class="breadcrumb-item"><a href="#!">Отчеты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
        
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Базовая линейная диаграмма</h5>
                    </div>
                    <div class="card-body">
                        <div id="line-chart-1"></div>
                    </div>
                </div>
            </div>




            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Диаграмма с областями</h5>
                    </div>
                    <div class="card-body">
                        <div id="area-chart-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Гистограмма</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar-chart-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Гистограмма с накоплением</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar-chart-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Круговые диаграммы</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie-chart-1" style="width:100%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Пончик с круговыми диаграммами</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie-chart-2" style="width:100%"></div>
                    </div>
                </div>
            </div>
            <!-- [ variant-chart ] end -->


        </div>
        