<?php

/* @var $this yii\web\View */

use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->title = 'Smart Crypto Invest';
?>
<!--Initial scripts-->
<?php
     echo"<script language='javascript' src='../js/wow.min.js'></script>";

    echo"<script language='JavaScript'>
        new WOW().init();
    </script>";
?>


<?php
echo"<script language='javascript' src='../js/Chart.min.js'></script>";
?>

<!--banner GRAM
STATUS:-

TO DO:
-
-->

<div class="d-none d-lg-block">
    <aside id="aside1" class="animated fadeInLeft"  style="z-index:100000;">

        <div id="closeButton1" class="text-right" onclick="document.getElementById('aside1').style.display='none'"><img src="../img/banner/Group.png" style="pointer-events: all;"></div>
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="text-center text-white textt">
                <h4><?=Yii::t('app','We can buy ')?><b>GRAM</b></h4>
            </div>
            <div class="text text-center">
                <?php
                echo"<img src=\"../img/banner/elipse.png\"; class=\"elipse\">";
                ?>
            </div>
            <div class="butt">
                <a class="btn button-baner text-white" href="#" data-toggle="modal" data-target="#gram" data-dismiss="modal" style="margin-bottom:40px; margin-top: 10px; width:160px;">
                    <?=Yii::t('app','Buy')?>
                </a>
            </div>
    </aside>
</div>


<div class="site-index">

<!--Site title
STATUS: -

TO DO:
-прилепить курс валют к сонтейнеру что бы тот не улетал в бок

-->

    <section class="title-text" style="z-index: 3;">
        <div class="container">
            <div class="row">
                <div class="col-md-7" style="z-index:999;">
                    <h1 class="green" style="font-size:22px;"><b>Smart Crypto Invest</b><?=Yii::t('app',' - the best way to invest into cryptocurrencies')?></h1>

                    <p style="font-size: 22px; margin: 30px 0;"><?=Yii::t('app','Our automated crypto-trading system allows you to accomplish profitable financial operations in a few clicks')?> </p>

                    <?php
                    echo Button::widget([
                        'label' => Yii::t('app','Invest'),
                        'options' => ['class' => 'btn  btn-success wow pulse animated', 'style' => 'pointer-events: all;  width: 152px;
                        height: 33px; font-size: 14px; text-align: center; padding:0; visibility: visible; animation-duration: 2s;
                        animation-delay: 300ms; animation-iteration-count: infinite; animation-name: pulse; border: none; background: linear-gradient(#048949, #05AA5B) !important;',
                            'data-wow-delay' =>'300ms', 'data-wow-iteration' => 'infinite', 'data-wow-duration'=>'2s',
                            "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],

                    ]);
                    ?>
                </div>
                <div class="exch-top animated fadeInRightBig ">
                    <div class="d-none d-lg-block offset-11">
                        <div class="pull-right exchange ">
                            BTC/USD <b style="color: #31C37D;">682.20 </b></br>
                            ETH/USD <b style="color: #31C37D;">12.2700 </b>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ellipse-main" style="padding-top:100px; padding-left:100px; z-index:999;">
                        <div class="row">
                            <div class="col-6">
                                <div class="text text-center">
                                <?php
                                    echo"<img src=\"../img/main/handshake.png\" >";

                                ?>
                                <p class="text-white"><?=Yii::t('app','Create account')?></p>
                                </div>
                            </div>
                            <div class="col-6 position-relative">
                                <div class="position-absolute" style="bottom: 0; left: 0;">
                                    <?php
                                    echo"<img src=\"../img/main/arrow-right.png\" class=\"animated fadeIn\" ;>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 position-relative">
                                <div class="position-absolute" style="bottom: 0; right: 0;">
                                    <?php
                                    echo"<img src=\"../img/main/arrow-left.png\"  class=\"animated fadeIn\";>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text text-center">
                                    <?php
                                    echo"<img src=\"../img/main/money.png\";>";
                                    ?>
                                    <p class="text-white"><?=Yii::t('app',' Invest ')?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text text-center">
                                    <?php
                                    echo"<img src=\"../img/main/coins.png\";>";
                                    ?>
                                    <p class="text-white "><?=Yii::t('app','Make profits')?></p>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </section>

    <section class="graph" style="z-index: 0;">
        <canvas id="lineChart" style="display: block; width: 100%; height: 410px !important; position: absolute; bottom:0;" class="chartjs-render-monitor"></canvas>

        <?php
        echo"<script language='javascript'>
                var ctxL = document.getElementById(\"lineChart\").getContext('2d');

                var gradientFill = ctxL.createLinearGradient(0, 410, 0, 0);
                gradientFill.addColorStop(1, \"rgba(7,115,62, 1)\");
                gradientFill.addColorStop(0, \"rgba(11,21,42, 0.4)\");

                var gradientFill1 = ctxL.createLinearGradient(0, 410, 0, 0);
                gradientFill1.addColorStop(1, \"rgba(7,115,62, 1)\");
                gradientFill1.addColorStop(0, \"rgba(11,21,42, 0.8)\");


                var myLineChart = new Chart(ctxL, {
                    type: 'line',
                    data: {
                        labels: [\" \", \" \", \" \", \" \", \" \"],
                        scaleLabel: false,
                        datasets: [
                            {
                                //radius: 0,
                                fillColor: \"rgba(25, 99, 16, 1.2)\",
                                strokeColor: \"rgba(25, 99, 16 ,1)\",
                                pointColor: \"rgba(25, 99, 16 ,1)\",
                                pointStrokeColor: \"#196310\",
                                pointHighlightFill: \"#196310\",
                                pointHighlightStroke: \"#31C37D\",
                                data: [10,8.9,10,9,11],
                                pointHoverBackgroundColor: '#31C37D',//5
                                pointHoverBorderColor: \"#31C37D\",
                                backgroundColor: gradientFill,
                                borderColor: [
                                    '#31C37D'
                                ],
                                borderWidth: 1
                            },
                            {
                                radius: 0,
                                fillColor: \"rgba(198,3,16,0.2)\",
                                strokeColor: \"rgba(198,3,16,1)\",
                                pointColor: \"rgba(198,3,16,1)\",
                                pointStrokeColor: \"#47ba00\",
                                pointHighlightFill: \"#47ba00\",
                                pointHighlightStroke: \"rgba(198,3,16,1)\",
                                data: [10,8.9,10,9,11],
                                pointHoverBackgroundColor: '#47ba00',
                                pointHoverBorderColor: \"rgba(71, 186, 0,1)\",
                                borderColor: 0,
                                backgroundColor: gradientFill1,
                                borderColor: [
                                    'rgba(71, 186, 0,1)'
                                ],
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        responsive: false,
                        scales: {
                            xAxes: [{
                                display:false,

                                gridLines: {
                                    color: \"rgba(15,26,51, 0)\",
                                },
                                ticks: {
                                    display: false
                                }
                            }],
                            yAxes: [{
                                display:false,
                                gridLines: {
                                    color: \"rgba(15,26,51, 0)\",
                                },
                                ticks: {
                                    display: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: false
                        }
                    },
                    scaleLabel: {
                        display: false
                    }

                });
        </script>";
        ?>
    </section>
    <section class="invest-packages " style="z-index: 3;">
        <a href="#Products"></a>
        <!--Invest packages

        Status: -

        To do :
        -расстояние между блоками
        -->
        <div class="container animated wow fadeIn" >
            <div class="row">
                <div class="col-12 text-center" style="margin: 25px 0;">
                    <h1 style=" font-size: 22px;"><?=Yii::t('app','Investition Packages')?></h1>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-3"></div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--STARTER-->
                    <div class="card start-grow">
                        <div class="card-header  start">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 style="font-size: 18px;"><?=Yii::t('app','Starter')?></h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="text-right"style="font-size: 18px;" ><?=Yii::t('app','from 50$')?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body start-pack">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8 text">
                                        <?=Yii::t('app','Minimal terms of investment')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        <?=Yii::t('app','test 15 days')?>
                                    </div>

                                    <div class="col-8 text">
                                        <?=Yii::t('app','Profits distribution between an investor/fund(%)')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        45/55
                                    </div>
                                    <!--buttons-->
                                    <div class="col-6 text-center">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info btn-invest-start',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo",
                                             'style' => 'color:#31C37D; border-color:#31C37D;'],
                                        ]);
                                        ?></td>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        echo Button::widget([
                                            'label' =>Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr btn-invest-start',
                                            'style' => 'color:#31C37D; border-color:#31C37D;',
                                                "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <!--STANDART-->
                    <div class="card start-grow">
                        <div class="card-header  start">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-7">
                                        <h1 style="font-size: 18px;"><?=Yii::t('app','Standard')?></h1>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="text-right"style="font-size: 18px;" ><?=Yii::t('app','up to 1000$')?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body start-pack">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8 text">
                                        <?=Yii::t('app','Minimal terms of investment')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        <?=Yii::t('app','30 days')?>
                                    </div>

                                    <div class="col-8 text">
                                        <?=Yii::t('app','Profits distribution between an investor/fund(%)')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        50/50
                                    </div>
                                    <!--buttons-->
                                    <div class="col-6 text-center">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info btn-invest-start',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo",
                                            'style' => 'color:#31C37D; border-color:#31C37D;'],
                                        ]);
                                        ?></td>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr btn-invest-start',
                                        'style' => 'color:#31C37D; border-color:#31C37D;',
                                                "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-6">
                    <!--Optimal-->
                    <div class="card pro-grow">
                        <div class="card-header  pro-card">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-7">
                                        <h1 style="font-size: 18px;"><?=Yii::t('app','Optimal')?></h1>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="text-right"style="font-size: 18px;" ><?=Yii::t('app','from 1000$')?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pro-pack">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8 text">
                                        <?=Yii::t('app','Minimal terms of investment')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        <?=Yii::t('app','30 days')?>
                                    </div>

                                    <div class="col-8 text">
                                        <?=Yii::t('app','Profits distribution between an investor/fund(%)')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        55/45
                                    </div>
                                    <!--buttons-->
                                    <div class="col-6 text-center">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo",
                                            'style' => 'color:white; border-color:#31C37D;'],
                                        ]);
                                        ?></td>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-success text-center investr btn-invest-pro',
                                        'style' => 'color:white;  background: linear-gradient(to bottom, #05AB5B, #048748);',
                                                "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <!--Advanced-->
                    <div class="card pro-grow">
                        <div class="card-header  pro-card">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-7">
                                        <h1 style="font-size: 18px;"><?=Yii::t('app','Advanced')?></h1>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="text-right"style="font-size: 18px;" ><?=Yii::t('app','from 3000$')?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pro-pack">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8 text">
                                        <?=Yii::t('app','Minimal terms of investment')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        <?=Yii::t('app','30 days')?>
                                    </div>

                                    <div class="col-8 text">
                                        <?=Yii::t('app','Profits distribution between an investor/fund(%)')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        60/40
                                    </div>
                                    <!--buttons-->
                                    <div class="col-6 text-center">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo",
                                            'style' => 'color:white; border-color:#31C37D;'],
                                        ]);
                                        ?></td>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-success text-center investr btn-invest-pro',
                                        'style' => 'color:white;  background: linear-gradient(to bottom, #05AB5B, #048748);',
                                                "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <!--Premium-->
                    <div class="card pro-grow">
                        <div class="card-header  pro-card">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-7">
                                        <h1 style="font-size: 18px;"><?=Yii::t('app','Premium')?></h1>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="text-right"style="font-size: 18px;" ><?=Yii::t('app','from 5000$')?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pro-pack">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8 text">
                                        <?=Yii::t('app','Minimal terms of investment')?>
                                    </div>
                                    <div class="col-4 text-right text">&#8734                                    </div>

                                    <div class="col-8 text">
                                        <?=Yii::t('app','Profits distribution between an investor/fund(%)')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        55/45
                                    </div>
                                    <!--buttons-->
                                    <div class="col-6 text-center">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo",
                                            'style' => 'color:white; border-color:#31C37D;'],
                                        ]);
                                        ?></td>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-success text-center investr btn-invest-pro',
                                        'style' => 'color:white;  background: linear-gradient(to bottom, #05AB5B, #048748);',
                                                "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-sm-0"></div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <!--Business - API-->
                    <div class="card start-grow">
                        <div class="card-header  start">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-7">
                                        <h1 style="font-size: 18px;"><?=Yii::t('app','Business-API')?></h1>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="text-right"style="font-size: 18px;" ><?=Yii::t('app','from 2000$')?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body start-pack">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8 text">
                                        <?=Yii::t('app','Minimal terms of investment')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        <?=Yii::t('app','test 15 days')?>
                                    </div>

                                    <div class="col-8 text">
                                        <?=Yii::t('app','Profits distribution between an investor/fund(%)')?>
                                    </div>
                                    <div class="col-4 text-right text">
                                        50/50
                                    </div>
                                    <!--buttons-->
                                    <div class="col-6 text-center">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info btn-invest-start',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo",
                                            'style' => 'color:#31C37D; border-color:#31C37D;'],
                                        ]);
                                        ?></td>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr btn-invest-start',
                                        'style' => 'color:#31C37D; border-color:#31C37D;',
                                                "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <!--Exlusive-API-->
                    <div class="card start-grow">
                        <div class="card-header  start">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 style="font-size: 18px;"><?=Yii::t('app','Exlusive-API')?></h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="text-right"style="font-size: 18px;" ><?=Yii::t('app','from 15000$')?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body start-pack">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8 text">
                                        <?=Yii::t('app','Minimal terms of investment')?>
                                    </div>
                                    <div class="col-4 text-right text">&#8734</div>

                                    <div class="col-8 text">
                                        <?=Yii::t('app','Profits distribution between an investor/fund(%)')?>
                                    </div>
                                    <div class="col-4 text-right text" style="font-size: 10px;">
                                        <?=Yii::t('app','by agreement')?>
                                    </div>
                                    <!--buttons-->
                                    <div class="col-6 text-center">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info btn-invest-start',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo",
                                            'style' => 'color:#31C37D; border-color:#31C37D;'],
                                        ]);
                                        ?></td>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr btn-invest-start',
                                        'style' => 'color:#31C37D; border-color:#31C37D;',
                                                "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal for packages-->
        <div class="modal fade" id="ModalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">%NAME%</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <!--Формат-->
                                <div class="col-6 light">
                                    <p><?=Yii::t('app','Format')?></p>
                                </div>
                                <div class="col-6 light">
                                    <p class="info-modal"><?=Yii::t('app','Trust management ')?></p>
                                </div>
                                <!--Минимальный вход-->
                                <div class="col-6 dark">
                                    <p><?=Yii::t('app','Minimal income')?></p>
                                </div>
                                <div class="col-6 dark">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Доходность-->
                                <div class="col-6 light">
                                    <p><?=Yii::t('app','Profitability')?></p>
                                </div>
                                <div class="col-6 light">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Минимальный срок инвестирования-->
                                <div class="col-6 dark">
                                    <p><?=Yii::t('app','Minimal investment term')?></p>
                                </div>
                                <div class="col-6 dark">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Распределение прибыли-->
                                <div class="col-6 light">
                                    <p><?=Yii::t('app','Income distribution investor/fund in %')?></p>
                                </div>
                                <div class="col-6 light">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Выплаты-->
                                <div class="col-6 dark">
                                    <p><?=Yii::t('app','Payments')?></p>
                                </div>
                                <div class="col-6 dark">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Условия получения прибыли-->
                                <div class="col-6 light">
                                    <p><?=Yii::t('app','Income receiving conditions')?></p>
                                </div>
                                <div class="col-6 light">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--USD-->
                                <div class="col-6 dark">
                                    <p><?=Yii::t('app','USD withdrawal conditions')?></p>
                                </div>
                                <div class="col-6 dark">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Досрочный вывод-->
                                <div class="col-6 light">
                                    <p><?=Yii::t('app','Preschedule withdrawal')?></p>
                                </div>
                                <div class="col-6 light">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Формат пополнения-->
                                <div class="col-6 dark">
                                    <p><?=Yii::t('app','Replenishment format')?></p>
                                </div>
                                <div class="col-6 dark">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Капитализация процентов-->
                                <div class="col-6 light">
                                    <p><?=Yii::t('app','Per cent capitalization')?></p>
                                </div>
                                <div class="col-6 light">
                                    <p class="info-modal"> </p>
                                </div>
                                <!--Отчетность-->
                                <div class="col-6 dark">
                                    <p><?=Yii::t('app','Reporting')?></p>
                                </div>
                                <div class="col-6 dark">
                                    <p class="info-modal"> </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Modal SIGN UP-->
        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-signup modal-dialog-centered" role="document">
                <div class="modal-content">
                    <?php
                    echo"<style>
                    .modal-signup{
                        max-width:325px !important;
                        height:570px !important;
                    }
                    .signup{
                      background-image: url(../img/signin/signin_bg.png);
                    }
                    .signup-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signup, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#1B2435;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .enter{
                        margin-bottom:25px;
                    }

                    #closeButtonModal:hover{
                     background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    color: #fff !important;
                    border: 1px solid rgba(0,0,0,0);
                    }
                    .button-signup{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }</style>"
                    ?>
                    <div class="signup container-fluid d-flex flex-column justify-content-center align-items-center">
                        <?php
                        echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"img-fluid mt-4\">";
                        ?>
                        <div class="text-center text-white">
                            <p class="signup-text">Smart Crypto Invest</p>
                        </div>
                        <input class="data form-control" type="text" placeholder=<?=Yii::t('app','Username*')?>  />
                        <input class="data form-control" type="text" placeholder="E-mail*" />
                        <input class="data form-control" type="text" placeholder=<?=Yii::t('app','Password*')?> />

                        <a id="buttonInModal" class="btn button-signup text-white" href="#" style="margin-bottom:40px; margin-top: 10px;">
                            <?=Yii::t('app','Sign up')?>
                        </a>
                        <p class="text-white">
                            <?=Yii::t('app','Already have an account?')?>
                        </p>

                        <a  id="closeButtonModal"  class="enter btn btn-outline-success" style ="border-color:#31c37d; color :#31c37d;" href="#" data-toggle="modal" data-target="#signin" data-dismiss="modal" >
                            <?=Yii::t('app','Sign in')?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal SIGN IN-->
        <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-signin modal-signup modal-dialog-centered" role="document">
                <div class="modal-content">
                    <?php
                    echo"<style>
                    .modal-signin{
                        max-width:325px !important;
                        height:570px !important;
                    }
                    .signin{
                      background-image: url(../img/signin/signin_bg.png);
                    }
                    .signin-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signin, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#1B2435;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .button-signin{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }
                    </style>"
                    ?>
                    <div class="signin container-fluid d-flex flex-column justify-content-center align-items-center">
                      <?php
                        echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"img-fluid mt-4\">";
                       ?>
                      <div class="text-center text-white">
                        <p class="signin-text">Smart Crypto Invest</p>
                      </div>
                      <input class="data form-control" type="text" placeholder="E-mail" />
                      <input class="data form-control" type="text" placeholder=<?=Yii::t('app','Password')?> />

                      <!-- ЮЛЯ, 2 ЧАСА НОЧИ, Я НЕ ЗНАЮ, ЧТО С ЭТИМИ ЛИНКАМИ ДЕЛАТЬ -->
                      <a id="buttonInModal" class="btn button-signin text-white" href="#">
                          <?=Yii::t('app','Sign in')?>
                      </a>
                      <a class="text-white" style="margin-bottom:40px; margin-top: 10px;"  data-toggle="modal" data-target="#recover-password" data-dismiss="modal">
                          <?=Yii::t('app','Forgot password?')?>
                      </a>
                      <p class="text-white">
                          <?=Yii::t('app','Do not have an account?')?>
                    </p>
                        <a  id="closeButtonModal" class="enter btn btn-outline-success" href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal" >
                        <?=Yii::t('app','Sign up')?>
                      </a>
                    </div>

                </div>
            </div>
        </div>
        <!--RECOVER PASSWORD-->
        <div class="modal fade" id="recover-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-recover modal-dialog-centered" role="document">
                <div class="modal-content">
                    <?php
                    echo"<style>
                    .modal-recover{
                        max-width:325px !important;
                    }
                    .recover{
                      background-image: url(../img/signin/signin_bg.png);
                    }
                    .signup-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signup, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#1B2435;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .enter{
                        margin-bottom:25px;
                    }
                    .button-signup{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }</style>"
                    ?>
                    <div class="recover container-fluid d-flex flex-column justify-content-center align-items-center">
                        <?php
                        echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"img-fluid mt-4\">";
                        ?>
                        <div class="text-center text-white">
                            <p>Smart Crypto Invest</p>
                        </div>

                        <input class="data form-control" type="text" placeholder="E-mail*" />
                  <a id="buttonInModal" class="btn button-signup text-white" href="#" data-toggle="modal" data-target="#recover-password-two" data-dismiss="modal" style="margin-bottom:40px; margin-top: 10px;">

                            Восстановить
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- RECOVER PASSWORD TWO -->
        <div class="modal fade" id="recover-password-two" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-recover modal-dialog-centered" role="document">
                <div class="modal-content">
                    <?php
                    echo"<style>
                    .modal-recover{
                        max-width:325px !important;
                    }
                    .recover{
                      background-image: url(../img/signin/signin_bg.png);
                    }
                    .signup-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signup, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#1B2435;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .enter{
                        margin-bottom:25px;
                    }
                    .button-signup{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }</style>"
                    ?>
                    <div class="recover container-fluid d-flex flex-column justify-content-center align-items-center">
                        <?php
                        echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"img-fluid mt-4\">";
                        ?>
                      <div class="text-center text-white">
                        <p>Smart Crypto Invest</p>
                      </div>

                      <!-- ЮЛЯ, 2 ЧАСА НОЧИ, Я НЕ ЗНАЮ, ЧТО С ЭТИМИ ЛИНКАМИ ДЕЛАТЬ -->
                      <a class="btn btn-outline-success btn-recover2 mb-4" href="#">
                       <?=Yii::t('app','The recovery instructions')?><br /><?=Yii::t('app','is sent to your e-mail')?>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--YOU HAVE A QUESTION-->
    <div class="modal fade" id="haveQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-haveQuestion modal-dialog-centered" role="document">
            <div class="modal-content">
                <?php
                echo"<style>
                    .modal-recover{
                        max-width: 600px !important;
                    }
                    .question {
                    background: linear-gradient(123.69deg, #0A1327 0%, #1E2842 100%);
                    }
                    .signup-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signup, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#3B4451;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .enter{
                        margin-bottom:25px;
                    }
                    .button-question{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }</style>"
                ?>
                <div class="question container-fluid d-flex flex-column justify-content-center align-items-center">

                    <div class="text-center text-white" style="font-size: 14px; text-align: center; margin: 5%">
                        <p><?=Yii::t('app','You have questions?')?></p>
                            <p style="margin-top: -10px"><?=Yii::t('app','Write and we will reply shortly')?></p>
                    </div>

                    <input class="data form-control" type="text" placeholder="E-mail*" />
                    <input class="data form-control" type="text" placeholder=<?=Yii::t('app','Your message...')?> style="min-height: 150px"/>
                    <a id="closeButton" class="btn button-question text-white" href="#" style="margin-bottom:40px; margin-top: 10px;"data-toggle="modal" data-target="#haveQuestion2" data-dismiss="modal">
                    <?=Yii::t('app','Write to us')?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="modal fade" id="haveQuestion2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-haveQuestion2 modal-dialog-centered" role="document">
            <div class="modal-content">
                <?php
                echo"<style>
                    .modal-recover{
                        max-width: 600px !important;
                    }
                    .question2 {
                    background: linear-gradient(123.69deg, #0A1327 0%, #1E2842 100%);
                    }
                    .signup-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signup, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#3B4451;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .enter{
                        margin-bottom:25px;
                    }
                    .button-signup{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }
                    .masedge{
                      background-color: rgba(39, 174, 96, 0.44);
                      padding: 2%; 5% 2% 5%;
                      margin-bottom: 4%;
                      border: 1px solid #27AE60;
                      border-radius: 4px;
                      

                    }
                    </style>"
                ?>
                <div class="question2 container-fluid d-flex flex-column justify-content-center align-items-center">

                    <div class="text-center text-white" style="font-size: 14px; text-align: center; margin: 5%">
                        <p><?=Yii::t('app','You have questions?')?></p>
                        <p style="margin-top: -10px"><?=Yii::t('app','Write and we will reply shortly')?></p>
                    </div>

                    <div class="masedge text-center">
                        <p><?=Yii::t('app','Message sent')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--GRAM-->
    <div class="modal fade" id="gram" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-gram modal-dialog-centered" role="document">
            <div class="modal-content">
                <?php
                echo"<style>
                    .modal-recover{
                        max-width: 600px !important;
                    }
                    .gram {
                    background: linear-gradient(123.69deg, #0A1327 0%, #1E2842 100%);
                    }
                    .signup-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signup, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#3B4451;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .enter{
                        margin-bottom:25px;
                    }
                    .button-gram{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }</style>"
                ?>
                <div class="gram container-fluid d-flex flex-column justify-content-center align-items-center">

                    <div class="text-center text-white" style="font-size: 14px; text-align: center; margin: 5%">
                        <p><?=Yii::t('app','Want to buy Gram?')?></p>
                        <p style="margin-top: -10px"><?=Yii::t('app','Write your e-mail and we will get back to you soon as possible')?></p>
                    </div>

                    <input class="data form-control" type="text" placeholder="E-mail*" />
                    <a id="closeButton" class="btn button-gram text-white" href="#" style="margin-bottom:40px; margin-top: 10px;"data-toggle="modal" data-target="#gram2" data-dismiss="modal">
                        <?=Yii::t('app','Send')?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="modal fade" id="gram2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-gram2 modal-dialog-centered" role="document">
            <div class="modal-content">
                <?php
                echo"<style>
                    .modal-recover{
                        max-width: 600px !important;
                    }
                    .gramSent {
                    background: linear-gradient(123.69deg, #0A1327 0%, #1E2842 100%);
                    }
                    .signup-text{
                      margin-bottom: 40px;
                      margin-top: 10px;
                    }
                    .data, .button-signup, .enter{
                      width: 290px !important;
                    }
                    .data{
                      background-color:#3B4451;
                      border-radius: 4px;
                      border-color: #3B4451;
                      margin-top: 10px;
                      margin-bottom: 10px;
                    }
                    .enter{
                        margin-bottom:25px;
                    }
                    .masedge{
                      background-color: rgba(39, 174, 96, 0.44);
                      padding: 2%; 5% 2% 5%;
                      margin-bottom: 4%;
                      border: 1px solid #27AE60;
                      border-radius: 4px;
                    }
                    .button-gramSent{
                      background: linear-gradient(to bottom, #05AB5B, #05AB5B);
                    }</style>"
                ?>
                <div class="gramSent container-fluid d-flex flex-column justify-content-center align-items-center">

                    <div class="text-center text-white" style="font-size: 14px; text-align: center; margin: 5%">
                        <p><?=Yii::t('app','Want to buy Gram?')?></p>
                        <p style="margin-top: -10px"><?=Yii::t('app','Write your e-mail and we will get back to you soon as possible')?></p>
                    </div>

                    <div class="masedge text-center">
                        <p><?=Yii::t('app','Message sent')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--ADVANTEGES-->
    <section class="advnateges  animated wow fadeIn" >
        <div class="adv-caption">
            <h1 style=" font-size: 22px;"><?=Yii::t('app','Advantages')?></h1>
        </div>
        <div class="adv-content">
            <div class="row">
                <div class="text-left col-sm-12 col-md-6 col-lg-4">
                    <div class="plus">
                        <div class="imgg">

                            <?php
                            echo"<img src=\"../img/advanteges/analis.svg\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="text-left mincapt"><?=Yii::t('app','Accurate analysis')?></h5>
                        <p><?=Yii::t('app','Our service specialises on cryptocurrencies purchase&sale, using precise trading strategies to deal bids according to  exchange rates')?></p>
                    </div>
                </div>
                <div class="text-left col-sm-12 col-md-6 col-lg-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"../img/advanteges/exchange.svg\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt"><?=Yii::t('app','Multi-currency trading')?></h5>
                        <p><?=Yii::t('app','SCI supports investment in Bitcoin as well as Ethereum allowing you to profit from exchange rate differencies')?></p>
                    </div>
                </div>
                <div class="text-left col-sm-12 col-md-6 col-lg-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"../img/advanteges/onlinebanking.svg\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt"><?=Yii::t('app','Easy-to-use management')?></h5>
                        <p><?=Yii::t('app','Give us API access only for trading purposes or choose trust management delegating funds control to us')?></p>
                    </div>
                </div>
                <div class="text-left col-sm-12 col-md-6 col-lg-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"../img/advanteges/cryptocurrency.svg\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt"><?=Yii::t('app','Security')?></h5>
                        <p><?=Yii::t('app','We provide safe protection of your financial operations and personal data from any uncensored access')?></p>
                    </div>
                </div>
                <div class="text-left col-sm-12 col-md-6 col-lg-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"../img/advanteges/time.svg\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt"><?=Yii::t('app','Free time')?></h5>
                        <p><?=Yii::t('app','Automated trading allows you to configure and start the system, saving your time and energy')?></p>
                    </div>
                </div>
                <div class="text-left col-sm-12 col-md-6 col-lg-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"../img/advanteges/operetions.svg\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="text-left mincapt"><?=Yii::t('app','Operations transparency')?></h5>
                        <p><?=Yii::t('app','Track your tradings’ profitability in the real-time, using our site’s financial reporting')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="report  animated wow fadeIn" style="margin-bottom: 50px;">
        <!-- REPORTS -->
        <div class="container-fluid">
            <div class="container text-center">
                <div class="title">
                    <h1 style=" font-size: 22px;"><?=Yii::t('app','Reporting')?></h1>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 35px;">
                        <div class="report-title">
                            <?=Yii::t('app','Trust management')?>
                        </div>
                        <div class="report-text">
                            <?=Yii::t('app','When using trust management investor receives reports in the form of a downloadable document which contains detailed information about investor’s financial operations')?>
                        </div>
                        <div class="report-img">
                            <?php
                            echo"<img src=\"../img/reports/sheet.png\"; class=\"analis img-fluid\">";
                            ?>
                        </div>
                        <div id="report-download-btn">
                            <a href="#">
                                <?php
                                echo Button::widget([
                                    'label' => Yii::t('app','Download reporting exam'),
                                    'options' => ['class' => 'btn text-right',
                                'style' => 'color:white; background: linear-gradient(to bottom, #05AB5B, #048748);'],
                                ]);
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="report-title">
                            <?=Yii::t('app','Trading via API')?>
                        </div>
                        <div class="report-text">
                            <?=Yii::t('app','If using API management investor can track his operations profits and exchange rate dynamics with the aid of a chart and a diagram in the personal account')?>
                        </div>
                        <div class="report-img">
                            <?php
                            echo"<img src=\"../img/reports/report-graphs.png\"; class=\"analis img-fluid\">";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--RESULT-->
        <div class="chart  wow animated fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 style=" font-size: 22px;"><?=Yii::t('app','Our results')?></h1>
                    </div>

                    <section class="result" >

                        <div class="container" style="position: relative;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="position: absolute; top: 50px; font-size: 16px; line-height: 19px;">
                                    <p><?=Yii::t('app','According to statistics shown on this graph, financial operations give a stable 0.5-1% income a day. Thanks to that, an investment of 1BTC grew up to 144.5BTC due to precise trading strategies and market analysis')?></p>
                                </div>
                                <div class="col-md-6 col-sm-12" style="height: 10px;"></div>
                                <div class="col-md-12">
                                    <div class="chart-container">
                                    <canvas id="lineChartResult"  class="chartjs-render-monitor" style="padding-top: 20px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <?php
                    echo"<script language='javascript'>
                        var ctxL2 = document.getElementById(\"lineChartResult\").getContext('2d');

                        var gradientFillTwo = ctxL2.createLinearGradient(0, 50, 0, 10);
                        gradientFillTwo.addColorStop(1, \"rgba(17, 77, 49, 1)\");
                        gradientFillTwo.addColorStop(0, \"rgba(17, 77, 49, 0.6)\");

                        var myNewLineChart = new Chart(ctxL2, {
					            type: 'line',
					            data: {
					                labels: [\"01.2017\", \"03.2017\", \"05.2017\", \"07.2017\", \"09.2017\",\"11.2017\",\"01.2018\",\"03.2018\",\"05.2018\"],
					                scaleLabel: false,
					                datasets: [
					                    {
					                        radius: 5,
					                        fillColor: \"rgba(17, 77, 49, 1.2)\",
					                        strokeColor: \"rgba(0, 255, 135 ,1)\",
					                        pointColor: \"rgba(0, 255, 135 ,1)\",
					                        pointStrokeColor: \"#00ff87\",
					                        pointHighlightFill: \"#00ff87\",
					                        pointHighlightStroke: \"rgba(0, 255, 135,1)\",
					                        data: [0,40,30,60,75,55,100,120,144.5],
                                            pointBackgroundColor: \"#00ff87\",
                                            pointHoverBackgroundColor: \"#00ff87\",
                                            pointHoverBorderColor: \"#00ff87\",

					                        backgroundColor: gradientFillTwo,
					                    	borderColor: [
					                        'rgba(0, 255, 135,1)'
					                    	],
					                    	borderWidth: 1
					                    }
					                ]
					            },
					            options: {
					                responsive: true,
					                 maintainAspectRatio: false,
					                scales: {
                                        xAxes: [{
                                                    display:true,

                                                    gridLines: {
                                                        color: \"rgba(255, 255, 255, 0)\",
                                                    },
                                                    ticks: {
                                                        display: true,
                                                        fontColor: \"white\"
                                                    }
                                                }],
                                        yAxes: [{
                                                    display:false,
                                                    gridLines: {
                                                        color: \"rgba(255, 0, 0, 0)\",
                                                    },
                                                    ticks: {
                                                        display: false
                                                    }
                                                }]
                                        },
                                        legend: {
                                                display: false
                                             },
                                             tooltips: {
                                                enabled: true
                                             }
                                        },
                                scaleLabel: {
                                       display: true,
                                       color : \"#fff\",
                                },


					        });
                        </script>";
                    ?>
                </div>
            </div>
        </div>
        <!-- QUESTIONS -->
        <div class="container" style="margin-top: 50px;">
            <div class="title text-center"><?=Yii::t('app','Questions')?></div>
            <div class="questions">
                <div class="row d-flex align-items-center">
                    <input class="hide" id="hd-1" type="checkbox">
                    <label for="hd-1">
                        <div class="row labe">
                            <?php
                            echo"<img for=\"hd-1\"; src=\"../img/questions/question.png\"; class=\"question-img\">";
                            ?>
                            <?=Yii::t('app','Why Smart Crypto Invest?')?>
                        </div>
                    </label>
                    <div>
                        <div class="d-flex align-items-top">
                            <?php
                            echo"<img for=\"hd-1\"; src=\"../img/questions/points.png\"; style=\"margin-right:35px;\">";
                            ?>
                            <p>
                                <?=Yii::t('app','Users need our service not only for profits increase, but also for time-saving. You can automatically deal financial operations in only a few clicks with our auto-trading!')?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <input class="hide" id="hd-2" type="checkbox">
                    <label for="hd-2">
                        <div class="row labe">
                            <?php
                            echo"<img src=\"../img/questions/question.png\"; class=\"question-img\">";
                            ?>
                            <?=Yii::t('app','Can I trust SCI?')?>
                        </div>
                    </label>
                    <div>
                        <div class="d-flex align-items-top">
                            <?php
                            echo"<img for=\"hd-1\"; src=\"../img/questions/points.png\"; style=\"margin-right:35px;\">";
                            ?>
                            <p>
                                <?=Yii::t('app','You don’t have to worry about reliability of our trading – we guarantee full privacy and personal data protection, as well as profitability of financial operations accomplished with the aid of our service.')?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <input class="hide" id="hd-3" type="checkbox">
                    <label for="hd-3">
                        <div class="row labe">
                            <?php
                            echo"<img src=\"../img/questions/question.png\"; class=\"question-img\">";
                            ?>
                            <?=Yii::t('app','How much income can I make?')?>
                        </div>
                    </label>
                    <div>
                        <div class="d-flex align-items-top">
                            <?php
                            echo"<img for=\"hd-1\"; src=\"../img/questions/points.png\"; style=\"margin-right:35px;\">";
                            ?>
                            <p>
                                <?=Yii::t('app','Quantity of currency received depends on your investment package and the situation on the market. Increase your profits by using tariff plans most suitable for you and by regular monitoring of financial operations review!')?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <input class="hide" id="hd-5" type="checkbox">
                    <label for="hd-5">
                        <div class="row labe">
                            <?php
                            echo"<img src=\"../img/questions/question.png\"; class=\"question-img\">";
                            ?>
                            <?=Yii::t('app','And what about security?')?>
                        </div>
                    </label>
                    <div>
                        <div class="d-flex align-items-top">
                            <?php
                            echo"<img for=\"hd-1\"; src=\"../img/questions/points.png\"; style=\"margin-right:35px;\">";
                            ?>
                            <p>
                                <?=Yii::t('app','We have made a great effort to ensure security of your trading operations  as it is possible to be. Data leak or hacker attack risks are minimized on our site. Furthermore, we are accustomed to the strict security standards, that is why we ensured an excellent trading security.')?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <input class="hide" id="hd-6" type="checkbox">
                    <label for="hd-6">
                        <div class="row labe">
                            <?php
                            echo"<img src=\"../img/questions/question.png\"; class=\"question-img\">";
                            ?>
                            <?=Yii::t('app','Is it easy to use SCI?')?>
                        </div>
                    </label>
                    <div>
                        <div class="d-flex align-items-top">
                            <?php
                            echo"<img for=\"hd-1\"; src=\"../img/questions/points.png\"; style=\"margin-right:35px;\">";
                            ?>
                            <p>
                                <?=Yii::t('app','Yes! For using our service you need only to sign up, choose your investment package – and receive income!')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <a class="btn btn-success text-right" href="#" data-toggle="modal" data-target="#haveQuestion">
                    <?=Yii::t('app','Any questions?')?>
                </a>
            </div>
        </div>
    </section>



    <section class="news  animated wow fadeIn">
        <div class="news-caption">
            <span style=" font-size: 22px;"><?=Yii::t('app','News')?></span>
        </div>
        <div class="d-none d-lg-block">
        <div id="news-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="margin-left: 95px;">
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-1.png\" alt=\"First slide\">";
                                ?>
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h5>Джордж Сорос готов
                                        торговать криптовалютами</h5>
                                    <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                    <p class="slider-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut </p>
                                    <p><a href="#">
                                            <?php
                                            echo Button::widget([
                                                'label' => Yii::t('app','Read more'),
                                                'options' => ['class' => 'btn btn-success text-left'],
                                            ]);
                                            ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-2.png\" alt=\"First slide\">";
                                ?>
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h5>Джордж Сорос готов
                                        торговать криптовалютами</h5>
                                    <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut </p>
                                    <p><a href="#">
                                            <?php
                                            echo Button::widget([
                                                'label' => Yii::t('app','Read more'),
                                                'options' => ['class' => 'btn btn-success text-left'],
                                            ]);
                                            ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="margin-left: 95px;">
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-1.png\" alt=\"Second slide\">";
                                ?>
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h5>Джордж Сорос готов
                                        торговать криптовалютами</h5>
                                    <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut </p>
                                    <p><a href="#">
                                            <?php
                                            echo Button::widget([
                                                'label' => Yii::t('app','Read more'),
                                                'options' => ['class' => 'btn btn-success text-left'],
                                            ]);
                                            ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-2.png\" alt=\"Second slide\">";
                                ?>
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h5>Джордж Сорос готов
                                        торговать криптовалютами</h5>
                                    <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut </p>
                                    <p><a href="#">
                                            <?php
                                            echo Button::widget([
                                                'label' => Yii::t('app','Read more'),
                                                'options' => ['class' => 'btn btn-success text-left'],
                                            ]);
                                            ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#news-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#news-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        <div class="d-none d-sm-block d-md-none">
            <div id="news-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" >
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="news-img">
                                    <?php
                                    echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-1.png\" alt=\"First slide\">";
                                    ?>
                                </div>
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h5>Джордж Сорос готов
                                            торговать криптовалютами</h5>
                                        <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                        <p class="slider-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut </p>
                                        <p><a href="#">
                                                <?php
                                                echo Button::widget([
                                                    'label' => Yii::t('app','Read more'),
                                                    'options' => ['class' => 'btn btn-success text-left'],
                                                ]);
                                                ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-lg-block col-lg-5">
                                <div class="news-img">
                                    <?php
                                    echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-2.png\" alt=\"First slide\">";
                                    ?>
                                </div>
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h5>Джордж Сорос готов
                                            торговать криптовалютами</h5>
                                        <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut </p>
                                        <p><a href="#">
                                                <?php
                                                echo Button::widget([
                                                    'label' => Yii::t('app','Read more'),
                                                    'options' => ['class' => 'btn btn-success text-left'],
                                                ]);
                                                ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="news-img">
                                    <?php
                                    echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-1.png\" alt=\"Second slide\">";
                                    ?>
                                </div>
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <strong>Джордж Сорос готов
                                            торговать криптовалютами</strong>
                                        <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut </p>
                                        <p><a href="#">
                                                <?php
                                                echo Button::widget([
                                                    'label' => Yii::t('app','Read more'),
                                                    'options' => ['class' => 'btn btn-success text-left'],
                                                ]);
                                                ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-lg-block col-lg-5">
                                <div class="news-img">
                                    <?php
                                    echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-2.png\" alt=\"Second slide\">";
                                    ?>
                                </div>
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <strong>Джордж Сорос готов
                                            торговать криптовалютами</strong>
                                        <hr style="border-top: 2px solid #00A656; margin:5px 0px" width="18%">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut </p>
                                        <p><a href="#">
                                                <?php
                                                echo Button::widget([
                                                    'label' => Yii::t('app','Read more'),
                                                    'options' => ['class' => 'btn btn-success text-left'],
                                                ]);
                                                ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#news-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#news-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
</div>
