<?php

/* @var $this yii\web\View */

use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php
echo"<style>
body{
  height: 430px;
  weight: 350px;
  align-items: center;
  background-image: url(../img/banner/ban.png);
  background-repeat: no-repeat;
  background-size: 100%;
}
a{
  width: 290px !important;
}
.button-signup{
  background: linear-gradient(180deg, #289FD9 0%, #0A6B9B 100%);
}
.elipse{
  margin: 10% 0;
}
.textt{
  margin-top: 10%;
}
</style>"
?>
<div class="container-fluid d-flex flex-column justify-content-center align-items-center">

    <div class="text-center text-white textt">
        <h2>У нас можно купить <b>GRAM</b></h2>
    </div>
    <div class="text text-center">
        <?php
        echo"<img src=\"../img/banner/elipse.png\"; class=\"elipse\">";
        ?>
        <a class="btn button-signup text-white" onclick="return ar_callLink( {target: '_blank'} );" href="#" style="margin-bottom:40px; margin-top: 10px;">
            Купить
        </a>

    </div>
</div>
