<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use lajax\languagepicker\widgets\LanguagePicker;
use app\widgets\multiLangD\MultiLang;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


    <header>
        <section class="back">
        <div id="container" class="triangle-container">
            <div id="output" class="">
            </div>


        </div>
        <div id="controls" class="" style="display: none;">
        </div>

        <?php
            echo"<script language='javascript' src=\"../js/Triangle.js\"></script>";
            ?>

        </section>

        <div class="navigation-top fixed-top">
    <?php


    Yii::$app->user->isGuest ? (
                $endDiv = Yii::t('app','User Account')
            ) : (
                $endDiv = Yii::$app->user->identity->username
            );

    NavBar::begin([
        'brandLabel' => '<img src="../img/logo/logo-SCI.png"; class="logo">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg',
            'style' => 'background-color: inherit;'

        ]
    ]);
    echo Nav::widget([
        'options' => ['class' => ' navbar navbar-expand-lg  collapse nav-wid float-left','id'=>'navigation',
            'style' => 'margin: 0 auto;'],
        'items' => array(
            array('label' => Yii::t('app', 'About us'), 'url' => ('#content')),
            array('label' => Yii::t('app', 'Products'), 'url' => ('#products')),
            array('label' =>  Yii::t('app', 'Advantages'), 'url' => ('#advantages')),
            array('label' =>  Yii::t('app', 'Reporting'), 'url' => ('#reporting')),
            array('label' => Yii::t('app', 'Questions'), 'url' => ('#questions')),
            array('label' => Yii::t('app', 'News'), 'url' => ('#news')),
        )]);
?>
<div class="navbar-text pull-right ">
    <?php
    echo MultiLang::widget([
        'cssClass'=>'pull-right language'
    ]);

        echo Button::widget([
            'label' => $endDiv,
            'options' => ['class' => 'btn btn-outline-success btn-personal-area',
            'style' => 'margin-left: 15px; color: #fff; border: 2px solid #27AE60; border-radius:4px;',
        "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
        ]);
    ?>


</div>
        <?php
    NavBar::end();
    ?>

    </div>
    </header>
<div class="wrap">
    <div class="container">

        <?= $content ?>


    </div>
</div>

<footer class="footer" style="width: 100%; background-color: #000000; margin-top: 25px; padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-4">
                <?php
                echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"logo-footer\" style=\"width: 80px; display: flex; vertical-align: middle;\">";
                ?>
            </div>
            <div class="col-md-11 col-sm-8 d-flex justify-content-end">


            <?php

                echo Button::widget([
                        'label' => ' ',
                        'options'=>['class' => 'btn',
                            'style' => 'width : 50px; height: 50px; border-radius: 50%; margin: 0 3px; background: #123 url(../img/footer/telegram.png) center center no-repeat; background-size : 100%;',
                            ],
                ]);

                ?>

                <?php
                echo Button::widget([
                'label' => ' ',
                'options'=>['class' => 'btn', 'style' => 'width : 50px; height: 50px; border-radius: 50%; margin: 0 3px; background: #123 url(../img/footer/vk.png) center center no-repeat;background-size : 100%;'],
                ]);
                ?>
                <?php
                echo Button::widget([
                'label' => ' ',
                'options'=>['class' => 'btn', 'style' => 'width : 50px; height: 50px; border-radius: 50%; margin: 0 3px; background: #123 url(../img/footer/facebook.png) center center no-repeat;background-size : 100%;'],
                ]);
                ?>
                <?php
                echo Button::widget([
                'label' => ' ',
                'options'=>['class' => 'btn', 'style' => 'width : 50px; height: 50px; border-radius: 50%; margin-left: 3px; background: #123 url(../img/footer/instagram.png) center center no-repeat;background-size : 100%;'],
                ]);
                ?>
            </div>
        </div>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
