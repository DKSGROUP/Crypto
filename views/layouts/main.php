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
    <?php



    Yii::$app->user->isGuest ? (
                $endDiv = 'Личный кабинет'
            ) : (
                $endDiv = Yii::$app->user->identity->username
            );

    NavBar::begin([
        'brandLabel' => '<img src="img/logo/logo-SCI.png"; class="logo">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md ',
            'style' => 'background-color: inherit;'

        ]

    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-toggleable-md collapse nav-wid',
                        'style' => 'margin: 0 auto;'],
        'items' => [
            ['label' => 'О нас', 'url' => ['/site/index']],
            ['label' => 'Продукты', 'url' => ['/site/about']],
            ['label' => 'Преимущества', 'url' => ['/site/contact']],
            ['label' => 'Отчетность', 'url' => ['/site/contact']],
            ['label' => 'Вопросы', 'url' => ['/site/contact']],
            ['label' => 'Новости', 'url' => ['/site/contact']]
        ],
    ]);
?>
<div class="navbar-text pull-right">
    <?php
    echo LanguagePicker::widget([
            'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
            'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_LARGE
        ]);

        echo Button::widget([
            'label' => $endDiv,
            'options' => ['class' => 'btn btn-outline-success', 'style' => 'margin-left: 15px; color: #fff;'],
        ]);
    ?>
</div>
        <?php
    NavBar::end();
    ?>
    </header>
<div class="wrap">
    <div class="container">

        <?= $content ?>


    </div>
</div>

<footer class="footer" style="width: 100%; background-color: #000000; margin-top: 25px; padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <?php
                echo"<img src=\"img/logo/logo-SCI.png\"; class=\"logo-footer\" style=\"width: 80px; display: flex; vertical-align: middle;\">";
                ?>
            </div>
            <div class="col-md-11 d-flex justify-content-end">


            <?php

                echo Button::widget([
                        'label' => ' ',
                        'options'=>['class' => 'btn',
                            'style' => 'width : 50px; height: 50px; border-radius: 50%; margin: 0 3px; background: #123 url(img/footer/telegram.png) center center no-repeat; background-size : 100%;',
                            ],
                ]);
               
                ?>

                <?php
                echo Button::widget([
                'label' => ' ',
                'options'=>['class' => 'btn', 'style' => 'width : 50px; height: 50px; border-radius: 50%; margin: 0 3px; background: #123 url(img/footer/vk.png) center center no-repeat;background-size : 100%;'],
                ]);
                ?>
                <?php
                echo Button::widget([
                'label' => ' ',
                'options'=>['class' => 'btn', 'style' => 'width : 50px; height: 50px; border-radius: 50%; margin: 0 3px; background: #123 url(img/footer/facebook.png) center center no-repeat;background-size : 100%;'],
                ]);
                ?>
                <?php
                echo Button::widget([
                'label' => ' ',
                'options'=>['class' => 'btn', 'style' => 'width : 50px; height: 50px; border-radius: 50%; margin-left: 3px; background: #123 url(img/footer/instagram.png) center center no-repeat;background-size : 100%;'],
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
