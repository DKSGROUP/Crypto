<?php
/**
 * Created by PhpStorm.
 * User: Anastasiz
 * Date: 27.05.2018
 * Time: 20:17
 */

/**
 * Created by PhpStorm.
 * User: Anastasiz
 * Date: 27.05.2018
 * Time: 10:42
 */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='css\news.css' />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="news-caption">
    <h4>Преимущества</h4>
</div>
<div id="news-carousel" class="carousel slide" data-ride="carousel">
    <li data-target="#news-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#news-carousel" data-slide-to="1" class="active"></li>
    <li data-target="#news-carousel" data-slide-to="2" class=""></li>
    <div class="carousel-inner">
        <div class="row">
            <div class="col-md-5">
                <div class="carousel-item">
                    <img class="first-slide" src="img/news/news-1.png" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h3>Джордж Сорос готов
                                торговать криптовалютами</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut </p>
                            <p><a class="btn btn-md btn-primary" href="#" role="button"> Читать далее</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img class="first-slide" src="img/news/news-2.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Джордж Сорос готов
                            торговать криптовалютами</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut </p>
                        <p><a class="btn btn-md btn-primary" href="#" role="button">Читать далее</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item active">
        <img class="second-slide" src="img/news/news-2.png" alt="second slide">
        <div class="container">
            <div class="carousel-caption text-right">
                <h3>Джордж Сорос готов
                    торговать криптовалютами</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut </p>
                <p><a class="btn btn-md btn-primary btn-more" href="#" role="button">Читать далее</a></p>
            </div>
        </div>
    </div>
</div>
<a class="carousel-control-next" href="#news-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
<a class="carousel-control-prev" href="#news-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>