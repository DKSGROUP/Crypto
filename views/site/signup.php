<?php

/* @var $this yii\web\View */

use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Smart Crypto Invest';
?>
<?php
echo"<style>
body{
  height: 100vh;
  display:flex;
  align-items: center;
  background-image: url(../img/signin/signin_bg.png);
  background-repeat: no-repeat;
  background-size: 100%;
}
p{
  margin-bottom: 40px;
  margin-top: 10px;
}
input, a{
  width: 290px !important;
}
.data{
  background-color:#1B2435;
  border-radius: 4px;
  border-color: #3B4451;
  margin-top: 10px;
  margin-bottom: 10px;
}
.button-signup{
  background: linear-gradient(to bottom, #05AB5B, #05AB5B);
}</style>"
?>

<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
    <?php
    echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"analis\">";
    ?>
    <div class="text-center text-white">
        <p>Smart Crypto Invest</p>
    </div>
    <input class="data form-control" type="text" placeholder="Имя*" />
    <input class="data form-control" type="text" placeholder="E-mail*" />
    <input class="data form-control" type="text" placeholder="Пароль*" />

    <a class="btn button-signup text-white" href="#" style="margin-bottom:40px; margin-top: 10px;">
        Зарегестрироваться
    </a>
    <a class="btn text-white" href="#">
        У вас уже есть аккаунт?
    </a>
    <a class="btn btn-outline-success" href="#">
        Войти
    </a>
</div>
