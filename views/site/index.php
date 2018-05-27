<?php

/* @var $this yii\web\View */


use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->title = 'Smart Crypto Invest';
?>
<div class="site-index">
    <section class="title-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="green" style="font-size: 30px;"><b>Smart Crypto Invest</b> - лучший способ инвестировать в криптовалюты</h1>

                        <p style="font-size: 22px; margin: 30px 0;">Наша система автоматизированного трейдинга
                            позволяет роизводить прибыльные трейдинговые операции за несколько кликов </p>
                        <?php
                        echo Button::widget([
                        'label' => 'Инвестировать',
                        'options' => ['class' => 'btn btn btn-success', 'style' => 'width: 152px;
                        height: 22px; font-size: 14px; text-align: center; padding:0;'],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
    </section>
    <section class="graph">
        <canvas id="lineChart" style="display: block; height: 150px; " class="chartjs-render-monitor"></canvas>
    </section>
    <!--
    to do:
    -пофиксить скрипт
    -->
    <!--<script>
        var ctxL = document.getElementById("lineChart").getContext('2d');

        var gradientFill = ctxL.createLinearGradient(0, 800, 0, 0);
        gradientFill.addColorStop(1, "rgba(25, 99, 16, 0.6)");
        gradientFill.addColorStop(0, "rgba(6, 14, 31, 0)");

        var gradientFill1 = ctxL.createLinearGradient(0, 800, 0, 100);
        gradientFill1.addColorStop(1, "rgba(71, 186, 0, 0.6)");
        gradientFill1.addColorStop(0, "rgba(6, 14, 31, 0)");


        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: [" ", " ", " ", " ", " "],
                scaleLabel: false,
                datasets: [
                    {
                        //radius: 0,
                        fillColor: "rgba(25, 99, 16, 1.2)",
                        strokeColor: "rgba(25, 99, 16 ,1)",
                        pointColor: "rgba(25, 99, 16 ,1)",
                        pointStrokeColor: "#196310",
                        pointHighlightFill: "#196310",
                        pointHighlightStroke: "rgba(25, 99, 16,1)",
                        data: [12,2,25,16,30],
                        pointHoverBackgroundColor: '#196310',//5
                        pointHoverBorderColor: "rgba(25, 99, 16,1)",
                        backgroundColor: gradientFill,
                        borderColor: [
                            'rgba(25,99,16,1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        //radius: 0,
                        fillColor: "rgba(198,3,16,0.2)",
                        strokeColor: "rgba(198,3,16,1)",
                        pointColor: "rgba(198,3,16,1)",
                        pointStrokeColor: "#47ba00",
                        pointHighlightFill: "#47ba00",
                        pointHighlightStroke: "rgba(198,3,16,1)",
                        data: [9,5,18,30,15],
                        pointHoverBackgroundColor: '#47ba00',
                        pointHoverBorderColor: "rgba(71, 186, 0,1)",
                        borderColor: 0,
                        backgroundColor: gradientFill1,
                        borderColor: [
                            'rgba(71, 186, 0,1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        //radius: 0,
                        fillColor: "rgba(198,3,16,0.2)",
                        strokeColor: "rgba(198,3,16,1)",
                        pointColor: "rgba(198,3,16,1)",
                        pointStrokeColor: "#47ba00",
                        pointHighlightFill: "#47ba00",
                        pointHighlightStroke: "rgba(198,3,16,1)",
                        data: [9,5,18,30,15],
                        pointHoverBackgroundColor: '#47ba00',
                        pointHoverBorderColor: "rgba(71, 186, 0,1)",
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
                responsive: true,
                scales: {
                    xAxes: [{
                        display:false,

                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        },
                        ticks: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        display:false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
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

    </script>-->

<!--
packages status: почти;

to do:
-прогуглить как сделать нормальные линки, а не костыльную херь
-сделать нормальное расположение при мобильной версии
-->

    <section class="invest-packages">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin: 25px 0;">
                    <h1 style=" font-size: 22px;">Инвестиционные пакеты</h1>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-4" style="margin: 0 10px;">
                        <div class="card">
                            <div class="card-header text-center start">
                                Starter
                            </div>
                            <div class="card-body start-pack">
                                <table>
                                    <tr>
                                        <td>срок инвестирования</td>
                                        <td class="text-right">тестовые 15 дней</td>
                                    </tr>
                                    <tr>
                                        <td>распределение прибыли</td>
                                        <td class="text-right">45/55</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #31C37D;">от 50$</td>
                                        <td><a href="#"><!--костылище-->
                                            <?php
                                            echo Button::widget([
                                                'label' => 'Инвестировать',
                                                'options' => ['class' => 'btn btn-outline-success text-right'],
                                            ]);
                                            ?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-center start">
                                Competent
                            </div>
                            <div class="card-body start-pack">
                                <table>
                                    <tr>
                                        <td>срок инвестирования</td>
                                        <td class="text-right">30 дней</td>
                                    </tr>
                                    <tr>
                                        <td>распределение прибыли</td>
                                        <td class="text-right">50/50</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #31C37D;">до 1000$</td>
                                        <td><a href="#"><!--костылище-->
                                                <?php
                                                echo Button::widget([
                                                    'label' => 'Инвестировать',
                                                    'options' => ['class' => 'btn btn-outline-success text-right'],
                                                ]);
                                                ?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center pro-card">
                            Advanced
                        </div>
                        <div class="card-body pro-pack">
                            <table>
                                <tr>
                                    <td>срок инвестирования</td>
                                    <td class="text-right">30 дней</td>
                                </tr>
                                <tr>
                                    <td>распределение прибыли</td>
                                    <td class="text-right">50/50</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 22px; color: #31C37D;">от 1000$</td>
                                    <td><a href="#"><!--костылище-->
                                            <?php
                                            echo Button::widget([
                                                'label' => 'Инвестировать',
                                                'options' => ['class' => 'btn btn-success text-right'],
                                            ]);
                                            ?>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center pro-card">
                            Expert
                        </div>
                        <div class="card-body pro-pack">
                            <table>
                                <tr>
                                    <td>срок инвестирования</td>
                                    <td class="text-right">30 дней</td>
                                </tr>
                                <tr>
                                    <td>распределение прибыли</td>
                                    <td class="text-right">60/40</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 22px; color: #31C37D;">от 3000$</td>
                                    <td><a href="#"><!--костылище-->
                                            <?php
                                            echo Button::widget([
                                                'label' => 'Инвестировать',
                                                'options' => ['class' => 'btn btn-success text-right'],
                                            ]);
                                            ?>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-header text-center pro-card">
                            Master - API
                        </div>
                        <div class="card-body pro-pack">
                            <table>
                                <tr>
                                    <td>срок инвестирования</td>
                                    <td class="text-right">бесконечность</td>
                                </tr>
                                <tr>
                                    <td>распределение прибыли</td>
                                    <td class="text-right">55/45</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 22px; color: #31C37D;">от 5000$</td>
                                    <td><a href="#"><!--костылище-->
                                            <?php
                                            echo Button::widget([
                                                'label' => 'Инвестировать',
                                                'options' => ['class' => 'btn btn-success text-right'],
                                            ]);
                                            ?>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  col-sm-6 d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12" style="margin: 0 10px;">
                        <div class="card">
                            <div class="card-header text-center start">
                                Novice - API
                            </div>
                            <div class="card-body start-pack">
                                <table>
                                    <tr>
                                        <td>срок инвестирования</td>
                                        <td class="text-right">тестовые 15 дней</td>
                                    </tr>
                                    <tr>
                                        <td>распределение прибыли</td>
                                        <td class="text-right">45/55</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #31C37D;">от 2000$</td>
                                        <td><a href="#"><!--костылище-->
                                                <?php
                                                echo Button::widget([
                                                    'label' => 'Инвестировать',
                                                    'options' => ['class' => 'btn btn-outline-success text-right'],
                                                ]);
                                                ?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-header text-center start">
                                Proficient
                            </div>
                            <div class="card-body start-pack">
                                <table>
                                    <tr>
                                        <td>срок инвестирования</td>
                                        <td class="text-right">бесконечность</td>
                                    </tr>
                                    <tr>
                                        <td>распределение прибыли</td>
                                        <td class="text-right">по договоренности</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #31C37D;">от 15000$</td>
                                        <td><a href="#"><!--костылище-->
                                                <?php
                                                echo Button::widget([
                                                    'label' => 'Инвестировать',
                                                    'options' => ['class' => 'btn btn-outline-success text-right'],
                                                ]);
                                                ?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
