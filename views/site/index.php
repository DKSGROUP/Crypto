<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>


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
              <img src="img/sheet.png" alt="Report sheet">
            </div>
            <div id="report-download-btn">
              <a href="#"><img src="img/download-btn.png" alt="download button"></a>
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
              <img src="img/report-graphs.png" alt="Graphs">
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
</div>
