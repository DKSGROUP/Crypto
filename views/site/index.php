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
    <section class="advnateges">
        <div class="adv-caption">
            <h4>Преимущества</h4>
        </div>
        <div class="adv-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"img/advanteges/analis.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt">Достоверный анализ</h5>
                        <p>Наши агоритмы прогнозирования</br>
                            позволяют составить грамотный</br>
                            и достоверный прогноз поведения</br>
                            рынка</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"img/advanteges/exchange.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt">Мультивалютный трейдинг</h5>
                        <p>Наш сервис позволяет торговать</br>
                            востребованными цифровыми</br>
                            валютами: Bitcoin и Etherium</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"img/advanteges/onlinebanking.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt">Простота использования</h5>
                        <p>Быстрая и лёгкая регистрация</br>
                            сочетается с выгодными тарифными</br>
                            планами и авторасчётом разных</br>
                            вариантов финансовых операций</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"img/advanteges/cryptocurrency.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt">Безопасность</h5>
                        <p>Обеспечиваем надёжную защиту</br>
                            ваших финансовых операций и</br>
                            персональных данных от любого</br>
                            постороннего вмешательства</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"img/advanteges/time.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt">Свободное время</h5>
                        <p>Автоматический трейдинг дает вам</br>
                            возможность настроить и запустить</br>
                            систему, оставаясь полностью</br>
                            свободными для полезных дел</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <div class="imgg">
                            <?php
                            echo"<img src=\"img/advanteges/operetions.png\"; class=\"analis\">";
                            ?>
                        </div>
                        <h5 class="mincapt">Прозрачность операций</h5>
                        <p>Следите в режиме реального</br>
                            времени за прибыльностью своих</br>
                            трейдингов, используя отчетность</br>
                            нашего сервиса перед клиентами</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="report">


        <!-- REPORTS -->
        <div class="container-fluid">
          <div class="container text-center">
            <div class="title">Отчетность</div>
            <div class="row">
              <div class="col-md-6">
                <div class="report-title">
                  Доверительное управление
                </div>
                <div class="report-text">
                  Используя Доверительное Управление инвестор доверяет деньги
                  трейдеру, отправляя их на его счёт и полностью поручая
                  управление средствами сервису. При этом больший процент
                  прибыли, чем при API-управлении, отчисляется клиенту.
                </div>
                <div class="report-img">
                  <?php
                    echo"<img src=\"img/reports/sheet.png\"; class=\"analis\">";
                   ?>
                </div>
                <div id="report-download-btn">
                  <a href="#">
                      <?php
                        echo"<img src=\"img/reports/download-btn.png\"; class=\"analis\">";
                       ?>
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="report-title">
                  Трейдинг по API
                </div>
                <div class="report-text">
                  Если же вкладчик использует управление с помощью API, то он
                  может отслеживать прибыльность своих операций и динамику
                  курса криптовалют с помощью обновляющихся графика и
                  диаграммы в личном кабинете.
                </div>
                <div class="report-img">
                    <?php
                      echo"<img src=\"img/reports/report-graphs.png\"; class=\"analis\">";
                     ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- QUESTIONS -->
        <div class="container-fluid">
      <div class="container">
        <div class="title text-center">Вопросы</div>
        <div class="questions">
          <input class="hide" id="hd-1" type="checkbox">
          <label for="hd-1">ПОЧЕМУ ИМЕННО SMART CRYPTO INVEST?</label>
          <div>
            Наш сервис нужен пользователю не только для увеличения прибыльности
            криптовалютных операций, но и для экономии полезного времени.
            С помощью нашего автотрейдинга вы можете автоматически проводить
            финансовые операции всего за несколько кликов!
          </div>
          <br>
          <input class="hide" id="hd-2" type="checkbox">
          <label for="hd-2">КАКОВА РАЗНИЦА МЕЖДУ УПРАВЛЕНИЕМ ЧЕРЕЗ API И ДОВЕРИТЕЛЬНЫМ УПРАВЛЕНИЕМ?</label>
          <div>
            Управление через API, предоставляемое нашим сервисом, позволяет вам лично
            регулировать свои финансовые операции с помощью удобного интерфейса.
            Доверительное управление позволяет делегировать контроль нам. Несмотря
            на отсутствие возможности управлять ходом операций самому, доверительное
            управление позволяет максимизировать прибыли благодаря оптимальным
            стратегиям трейдинга.
          </div>
          <br>
          <input class="hide" id="hd-3" type="checkbox">
          <label for="hd-3">СКОЛЬКО ПРИБЫЛИ Я МОГУ ПОЛУЧИТЬ?</label>
          <div>
            Количество получаемой валюты зависит от вашего инвестиционного пакета
            и обстановки на рынке. Увеличивайте свою прибыль, используя наиболее
            подходящие вам тарифные планы и регулярно проверяя отчёты по финансовым
            операциям!
          </div>
          <br>
          <input class="hide" id="hd-4" type="checkbox">
          <label for="hd-4">МОГУ ЛИ Я ДОВЕРЯТЬ SMART CRYPTO INVEST?</label>
          <div>
            Вам не нужно беспокоиться о надёжности нашего трейдинга - мы обеспечиваем
            полную приватность и защиту ваших данных, а также гарантируем прибыльность
            финансовых операций проводимых с помощью сервиса.
          </div>
          <br>
          <input class="hide" id="hd-5" type="checkbox">
          <label for="hd-5">А ЧТО НАСЧЁТ БЕЗОПАСНОСТИ?</label>
          <div>
            Мы приложили большие усилия чтобы обеспечить безопасность ваших
            трейдинг-операций настолько, насколько это вообще возможно.
            Риски утечки данных или хакерской атаки на нашем сайте минимизированы.
            Более того, мы привыкли к строгим стандартам безопасности, что позволяет
            наладить хорошую защиту трейдинга.
          </div>
          <br>
          <input class="hide" id="hd-6" type="checkbox">
          <label for="hd-6">ПРОСТО ЛИ ПОЛЬЗОВАТЬСЯ SMART CRYPTO INVEST?</label>
          <div>
            Да! Для использования нашего сервиса вам нужно всего лишь зарегистрироваться
            на сайте, выбрать инвестиционный пакет - и начать получать прибыль.
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#"><button type="button" class="btn button">Остались вопросы?</button></a>
        </div>
      </div>
    </div>
    </section>
    <section class="news">
        <div class="news-caption">
            <h4>Преимущества</h4>
        </div>
        <div id="news-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="margin-left: 95px;">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"img/news/news-1.png\" alt=\"First slide\">";
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
                                                    'label' => 'Читать далее',
                                                    'options' => ['class' => 'btn btn-success text-left'],
                                                ]);
                                                ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"img/news/news-2.png\" alt=\"First slide\">";
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
                                                    'label' => 'Читать далее',
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
                        <div class="col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"img/news/news-1.png\" alt=\"Second slide\">";
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
                                                'label' => 'Читать далее',
                                                'options' => ['class' => 'btn btn-success text-left'],
                                            ]);
                                            ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="news-img">
                                <?php
                                echo"<img class=\"d-block img-fluid\" src=\"img/news/news-2.png\" alt=\"Second slide\">";
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
                                                'label' => 'Читать далее',
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
