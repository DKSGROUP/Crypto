<?php

/* @var $this yii\web\View */

use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Smart Crypto Invest';
?>

<!-- ЮЛЯ, ПРОСТИ ПОЖАЛУЙСТА. Я ВЫРУБАЮСЬ -->

<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
  <?php
    echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"analis\">";
   ?>
  <div class="text-center text-white">
    <p>Smart Crypto Invest</p>
  </div>
  <input class="data form-control" type="text" placeholder="E-mail" />
  <input class="data form-control" type="text" placeholder="Пароль" />

  <!-- ЮЛЯ, 2 ЧАСА НОЧИ, Я НЕ ЗНАЮ, ЧТО С ЭТИМИ ЛИНКАМИ ДЕЛАТЬ -->
  <a class="btn button-signin text-white" href="#" style="margin-bottom:40px; margin-top: 10px;">
    Войти
  </a>
  <a class="btn text-white" href="#">
    У вас нет аккаунта?
  </a>
  <a class="btn btn-outline-success" href="#">
    Зарегестрироваться
  </a>
</div>
