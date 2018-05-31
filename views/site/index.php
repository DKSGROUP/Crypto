<?php

/* @var $this yii\web\View */


use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->title = 'Smart Crypto Invest';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>


<div class="site-index">
    <section class="back">
<!--
        <div id="container" class="triangle-container">
            <div id="output" class="">
            </div>


        </div>
        <div id="controls" class="">
        </div>-->

        <?php
        echo"<script language='javascript' src=\"../js/Triangle.js\"></script>"
        ?>

    </section>
    <!-- banner-->
  <!--  <div onload="init();" style="margin:0px;">
    <canvas id="canvas" width="350" height="430" style="display: block; background-color: rgb(255, 255, 255); margin: 0px auto; width: 240px; height: 400px;">
        <a class="various" data-fancybox-type="iframe" href="views/site/banner.php"></a>
    </canvas>
    </div>-->
    <section class="title-text">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="green" style="font-size:<h0px;"><b>Smart Crypto Invest</b><?=Yii::t('app',' - the best way to invest into cryptocurrencies')?></h1>

                    <p style="font-size: 22px; margin: 30px 0;"><?=Yii::t('app','Our automated crypto-trading system allows you to accomplish profitable financial operations in a few clicks')?> </p>
                    <?php
                    echo Button::widget([
                        'label' => Yii::t('app','Invest'),
                        'options' => ['class' => 'btn btn btn-success', 'style' => 'width: 152px;
                        height: 33px; font-size: 14px; text-align: center; padding:0;'],

                    ]);
                    ?>
                </div>




                  <!--  <div class="d-none d-lg-block col-lg-2 offset-11">
                        <div class="pull-right exchange ">
                            BTC/USD <b style="color: #31C37D;">682.20 </b></br>
                             ETH/USD <b style="color: #31C37D;">12.2700 </b>
                        </div>
                    </div>
-->
                    <div class="col-md-5" style="padding-top:100px; padding-left:100px;">
                        <div class="row">
                            <div class="col-6">
                                <div class="text text-center">
                                <?php
                                    echo"<img src=\"../img/main/Ellipse.png\"  >";
                                ?>
                                <p class="text-white"><?=Yii::t('app','Create account')?></p>
                                </div>
                            </div>
                            <div class="col-6 position-relative">
                                <div class="position-absolute" style="bottom: 0; left: 0;">
                                    <?php
                                    echo"<img src=\"../img/main/arrow-right.png\";>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 position-relative">
                                <div class="position-absolute" style="bottom: 0; right: 0;">
                                    <?php
                                    echo"<img src=\"../img/main/arrow-left.png\";>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text text-center">
                                    <?php
                                    echo"<img src=\"../img/main/Ellipse.png\";>";
                                    ?>
                                    <p class="text-white"><?=Yii::t('app',' Invest ')?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text text-center">
                                    <?php
                                    echo"<img src=\"../img/main/Ellipse.png\";>";
                                    ?>
                                    <p class="text-white "><?=Yii::t('app','Make profits')?></p>
                                </div>
                            </div>



                </div>

            </div>
        </div>
    </section>
    <section class="graph">
        <canvas id="lineChart" style="display: block; width: 100%;" class="chartjs-render-monitor"></canvas>


        <?php
        echo"<script language='javascript'>
        var ctxL = document.getElementById(\"lineChart\").getContext('2d');

        var gradientFill = ctxL.createLinearGradient(0, 800, 0, 0);
        gradientFill.addColorStop(1, \"rgba(25, 99, 16, 0.6)\");
        gradientFill.addColorStop(0, \"rgba(6, 14, 31, 0)\");

        var gradientFill1 = ctxL.createLinearGradient(0, 800, 0, 100);
        gradientFill1.addColorStop(1, \"rgba(71, 186, 0, 0.6)\");
        gradientFill1.addColorStop(0, \"rgba(6, 14, 31, 0)\");


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
                        pointHighlightStroke: \"rgba(25, 99, 16,1)\",
                        data: [12,2,25,16,30],
                        pointHoverBackgroundColor: '#196310',//5
                        pointHoverBorderColor: \"rgba(25, 99, 16,1)\",
                        backgroundColor: gradientFill,
                        borderColor: [
                            'rgba(25,99,16,1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        //radius: 0,
                        fillColor: \"rgba(198,3,16,0.2)\",
                        strokeColor: \"rgba(198,3,16,1)\",
                        pointColor: \"rgba(198,3,16,1)\",
                        pointStrokeColor: \"#47ba00\",
                        pointHighlightFill: \"#47ba00\",
                        pointHighlightStroke: \"rgba(198,3,16,1)\",
                        data: [9,5,18,30,15],
                        pointHoverBackgroundColor: '#47ba00',
                        pointHoverBorderColor: \"rgba(71, 186, 0,1)\",
                        borderColor: 0,
                        backgroundColor: gradientFill1,
                        borderColor: [
                            'rgba(71, 186, 0,1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        //radius: 0,
                        fillColor: \"rgba(198,3,16,0.2)\",
                        strokeColor: \"rgba(198,3,16,1)\",
                        pointColor: \"rgba(198,3,16,1)\",
                        pointStrokeColor: \"#47ba00\",
                        pointHighlightFill: \"#47ba00\",
                        pointHighlightStroke: \"rgba(198,3,16,1)\",
                        data: [9,5,18,30,15],
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
                            color: \"rgba(0, 0, 0, 0)\",
                        },
                        ticks: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        display:false,
                        gridLines: {
                            color: \"rgba(0, 0, 0, 0)\",
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
        </script>
        ";
        ?>
    </section>

    <!--
    packages status: почти;

    to do:
    -прогуглить как сделать нормальные линки, а не костыльную херь
    -->

    <section class="invest-packages">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin: 25px 0;">
                    <h1 style=" font-size: 22px;"><?=Yii::t('app','Investition Packages')?></h1>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-3"></div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header  start">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Starter')?></td>
                                    <td class="text-right"><?=Yii::t('app','from 50$')?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body start-pack">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Minimal terms of investment')?></td>
                                    <td class="text-right"><?=Yii::t('app','test 15 days')?></td>
                                </tr>
                                <tr>
                                    <td><?=Yii::t('app','Profits distribution between an investor/fund(%)')?></td>
                                    <td class="text-right">45/55</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo"],
                                        ]);
                                        ?></td>

                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' =>Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr'],
                                        ]);
                                        ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card">
                        <div class="card-header  start">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Standard')?></td>
                                    <td class="text-right"><?=Yii::t('app','up to 1000$')?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body start-pack">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Minimal terms of investment')?></td>
                                    <td class="text-right"><?=Yii::t('app','30 days')?></td>
                                </tr>
                                <tr>
                                    <td><?=Yii::t('app','Profits distribution between an investor/fund(%)')?></td>
                                    <td class="text-right">50/50</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo"],
                                        ]);
                                        ?></td>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr'],
                                        ]);
                                        ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card">
                        <div class="card-header  pro-card">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Optimal')?></td>
                                    <td class="text-right"><?=Yii::t('app','from 1000$')?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body pro-pack">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Minimal terms of investment')?></td>
                                    <td class="text-right"><?=Yii::t('app','30 days')?></td>
                                </tr>
                                <tr>
                                    <td><?=Yii::t('app','Profits distribution between an investor/fund(%)')?></td>
                                    <td class="text-right">55/45</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo"],
                                        ]);
                                        ?></td>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-success text-center investr'],
                                        ]);
                                        ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card">
                        <div class="card-header  pro-card">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Advanced')?></td>
                                    <td class="text-right"><?=Yii::t('app','from 3000$')?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body pro-pack">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Minimal terms of investment')?></td>
                                    <td class="text-right"><?=Yii::t('app','30 days')?></td>
                                </tr>
                                <tr>
                                    <td><?=Yii::t('app','Profits distribution between an investor/fund(%)')?></td>
                                    <td class="text-right">60/40</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo"],
                                        ]);
                                        ?></td>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-success text-center investr'],
                                        ]);
                                        ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card">
                        <div class="card-header  pro-card">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Premium')?></td>
                                    <td class="text-right"><?=Yii::t('app','from 5000$')?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body pro-pack">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Minimal terms of investment')?></td>
                                    <td class="text-right">-</td>
                                </tr>
                                <tr>
                                    <td><?=Yii::t('app','Profits distribution between an investor/fund(%)')?></td>
                                    <td class="text-right">55/45</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo"],
                                        ]);
                                        ?></td>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-success text-center investr'],
                                        ]);
                                        ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-sm-0"></div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card">
                        <div class="card-header  start">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Business - API')?></td>
                                    <td class="text-right"><?=Yii::t('app','from 2000$')?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body start-pack">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Minimal terms of investment')?></td>
                                    <td class="text-right"><?=Yii::t('app','test 15 days')?></td>
                                </tr>
                                <tr>
                                    <td><?=Yii::t('app','Profits distribution between an investor/fund(%)')?></td>
                                    <td class="text-right">50/50</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo"],
                                        ]);
                                        ?></td>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr'],
                                        ]);
                                        ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card">
                        <div class="card-header  start">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Exlusive - API')?></td>
                                    <td class="text-right"><?=Yii::t('app','from 15000$')?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body start-pack">
                            <table>
                                <tr>
                                    <td><?=Yii::t('app','Minimal terms of investment')?></td>
                                    <td class="text-right">-</td>
                                </tr>
                                <tr>
                                    <td><?=Yii::t('app','Profits distribution between an investor/fund(%)')?></td>
                                    <td class="text-right"><?=Yii::t('app','by agreement')?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','More'),
                                            'options' => ['class' => 'btn btn-outline-success text-center info',
                                                "data-toggle"=>"modal", "data-target"=>"#ModalInfo"],
                                        ]);
                                        ?></td>
                                    <td>
                                        <?php
                                        echo Button::widget([
                                            'label' => Yii::t('app','Invest'),
                                            'options' => ['class' => 'btn btn-outline-success text-center investr'],
                                        ]);
                                        ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                    <p>Формат</p>
                                </div>
                                <div class="col-6 light">
                                    <p>Доверительная форма</p>
                                </div>
                                <!--Минимальный вход-->
                                <div class="col-6 dark">
                                    <p>Минимальный вход</p>
                                </div>
                                <div class="col-6 dark">
                                    <p> </p>
                                </div>
                                <!--Доходность-->
                                <div class="col-6 light">
                                    <p>Доходность</p>
                                </div>
                                <div class="col-6 light">
                                    <p> </p>
                                </div>
                                <!--Минимальный срок инвестирования-->
                                <div class="col-6 dark">
                                    <p>Минимальный срок инвестирования</p>
                                </div>
                                <div class="col-6 dark">
                                    <p> </p>
                                </div>
                                <!--Распределение прибыли-->
                                <div class="col-6 light">
                                    <p>Распределение прибыли инвестор/фонд в %</p>
                                </div>
                                <div class="col-6 light">
                                    <p> </p>
                                </div>
                                <!--Выплаты-->
                                <div class="col-6 dark">
                                    <p>Выплаты</p>
                                </div>
                                <div class="col-6 dark">
                                    <p> </p>
                                </div>
                                <!--Условия получения прибыли-->
                                <div class="col-6 light">
                                    <p>Условия получения прибыли</p>
                                </div>
                                <div class="col-6 light">
                                    <p> </p>
                                </div>
                                <!--USD-->
                                <div class="col-6 dark">
                                    <p>Условия вывода в USD</p>
                                </div>
                                <div class="col-6 dark">
                                    <p> </p>
                                </div>
                                <!--Досрочный вывод-->
                                <div class="col-6 light">
                                    <p>Досрочный вывод</p>
                                </div>
                                <div class="col-6 light">
                                    <p> </p>
                                </div>
                                <!--Формат пополнения-->
                                <div class="col-6 dark">
                                    <p>Формат пополнения</p>
                                </div>
                                <div class="col-6 dark">
                                    <p> </p>
                                </div>
                                <!--Капитализация процентов-->
                                <div class="col-6 light">
                                    <p>Капитализация процентов</p>
                                </div>
                                <div class="col-6 light">
                                    <p> </p>
                                </div>
                                <!--Отчетность-->
                                <div class="col-6 dark">
                                    <p>Отчетность</p>
                                </div>
                                <div class="col-6 dark">
                                    <p> </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="advnateges">
        <div class="adv-caption">
            <h1 style=" font-size: 22px;"><?=Yii::t('app','Advantages')?></h1>
        </div>
        <div class="adv-content">
            <div class="row">
                <div class="text-left col-sm-12 col-md-6 col-lg-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"../img/advanteges/analis.png\"; class=\"analis\">";
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
                            echo"<img src=\"../img/advanteges/exchange.png\"; class=\"analis\">";
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
                            echo"<img src=\"../img/advanteges/onlinebanking.png\"; class=\"analis\">";
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
                            echo"<img src=\"../img/advanteges/cryptocurrency.png\"; class=\"analis\">";
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
                            echo"<img src=\"../img/advanteges/time.png\"; class=\"analis\">";
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
                            echo"<img src=\"../img/advanteges/operetions.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="text-left mincapt"><?=Yii::t('app','Operations transparency')?></h5>
                        <p><?=Yii::t('app','Track your tradings’ profitability in the real-time, using our site’s financial reporting')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="report">
        <!-- REPORTS -->
        <div class="container-fluid">
            <div class="container text-center">
                <div class="title">
                    <h1 style=" font-size: 22px;"><?=Yii::t('app','Reporting')?></h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="report-title">
                            <?=Yii::t('app','Trust management')?>
                        </div>
                        <div class="report-text">
                            <?=Yii::t('app','When using trust management investor receives reports in the form of a downloadable document which contains detailed information about investor’s financial operations')?>
                        </div>
                        <div class="report-img">
                            <?php
                            echo"<img src=\"../img/reports/sheet.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <div id="report-download-btn">
                            <a href="#">
                                <?php
                                echo Button::widget([
                                    'label' => Yii::t('app','Download reporting exam'),
                                    'options' => ['class' => 'btn btn-outline-success text-right'],
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
                            echo"<img src=\"../img/reports/report-graphs.png\"; class=\"analis\">";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="chart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 style=" font-size: 22px;"><?=Yii::t('app','Our results')?></h1>
                    </div>

                    <section class="result" style=" margin: 0 auto;">

                        <div class="container" style="position: relative;">
                            <div class="row">
                                <div class="col-md-6" style="position: absolute; top: 25px;">
                                    <p><?=Yii::t('app','According to statistics shown on this graph, financial operations give a stable 0.5-1% income a day. Thanks to that, an investment of 1BTC grew up to 144.5BTC due to precise trading strategies and market analysis')?></p>
                                </div>
                            </div>
                        </div>
                        <canvas id="lineChartResult" style="height: 500px;"  class="chartjs-render-monitor"></canvas>
                    </section>
                    <?php
                    echo"<script language='javascript'>
                        var ctxL = document.getElementById(\"lineChartResult\").getContext('2d');

                        var gradientFillTwo = ctxL.createLinearGradient(0, 50, 0, 10);
                        gradientFillTwo.addColorStop(1, \"rgba(17, 77, 49, 1)\");
                        gradientFillTwo.addColorStop(0, \"rgba(17, 77, 49, 0.6)\");


                        var myLineChart = new Chart(ctxL, {
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
					                        pointHoverBackgroundColor: '#00ff87',//5
					                        pointHoverBorderColor: \"rgba(0, 255, 135,1)\",
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
					                scales: {
					            xAxes: [{
					            			display:true,

					                        gridLines: {
					                            color: \"rgba(255, 255, 255, 0)\",
					                        },
					                        ticks: {
					                            display: true
					                        }
					                    }],
					            yAxes: [{
					            			//display:false,
					                        gridLines: {
					                            color: \"rgba(0, 0, 0, 0)\",
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
					            	display: true
					            }

					        });
        </script>
        ";
                    ?>
                </div>
            </div>
        </div>

        <!-- QUESTIONS -->
        <div class="container-fluid">
            <div class="container">
                <div class="title text-center"><?=Yii::t('app','Questions')?></div>
                <div class="questions">
                    <div class="row d-flex align-items-center">
                        <?php
                        echo"<img src=\"../img/questions/question.png\"; class=\"analis\">";
                        ?>
                        <input class="hide" id="hd-1" type="checkbox">
                        <label for="hd-1"><?=Yii::t('app','Why Smart Crypto Invest?')?></label>
                        <div>
                            <?=Yii::t('app','Users need our service not only for profits increase, but also for time-saving. You can automatically deal financial operations in only a few clicks with our auto-trading!')?>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <?php
                        echo"<img src=\"../img/questions/question.png\"; class=\"analis\">";
                        ?>
                        <input class="hide" id="hd-2" type="checkbox">
                        <label for="hd-2"><?=Yii::t('app','Can I trust SCI?')?></label>
                        <div>
                            <?=Yii::t('app','You don’t have to worry about reliability of our trading – we guarantee full privacy and personal data protection, as well as profitability of financial operations accomplished with the aid of our service.')?>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <?php
                        echo"<img src=\"../img/questions/question.png\"; class=\"analis\">";
                        ?>
                        <input class="hide" id="hd-3" type="checkbox">
                        <label for="hd-3"><?=Yii::t('app','How much income can I make?')?></label>
                        <div>
                            <?=Yii::t('app','Quantity of currency received depends on your investment package and the situation on the market. Increase your profits by using tariff plans most suitable for you and by regular monitoring of financial operations review!')?>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <?php
                        echo"<img src=\"../img/questions/question.png\"; class=\"analis\">";
                        ?>
                        <input class="hide" id="hd-5" type="checkbox">
                        <label for="hd-5"><?=Yii::t('app','And what about security?')?></label>
                        <div>
                            <?=Yii::t('app','We have made a great effort to ensure security of your trading operations  as it is possible to be. Data leak or hacker attack risks are minimized on our site. Furthermore, we are accustomed to the strict security standards, that is why we ensured an excellent trading security.')?>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <?php
                        echo"<img src=\"../img/questions/question.png\"; class=\"analis\">";
                        ?>
                        <input class="hide" id="hd-6" type="checkbox">
                        <label for="hd-6"><?=Yii::t('app','Is it easy to use SCI?')?></label>
                        <div>
                            <?=Yii::t('app','Yes! For using our service you need only to sign up, choose your investment package – and receive income!')?>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <a href="#">
                        <?php
                        echo Button::widget([
                            'label' => Yii::t('app','Any questions?'),
                            'options' => ['class' => 'btn btn-outline-success text-right'],
                        ]);
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="news-caption">
            <h1 style=" font-size: 22px;"><?=Yii::t('app','News')?></h1>
        </div>
        <div id="news-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="margin-left: 95px;">
                    <div class="row">
                        <div class="col-sm-10 col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-1.png\" alt=\"First slide\">";
                                ?>
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h5>Джордж Сорос готов
                                        торговать криптовалютами</h5>
                                    <p class="slider-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut </p>
                                    <p><a href="#">
                                            <?php
                                            echo Button::widget([
                                                'label' => Yii::t('app','Read More'),
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut </p>
                                    <p><a href="#">
                                            <?php
                                            echo Button::widget([
                                                'label' => Yii::t('app','Read More'),
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
                        <div class="col-sm-10 col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"../img/news/news-1.png\" alt=\"Second slide\">";
                                ?>
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h5>Джордж Сорос готов
                                        торговать криптовалютами</h5>
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
    </section>

