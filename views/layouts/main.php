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
        'brandLabel' => '<img src="img/logo/logo.png"; class="logo">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-sm navbar-dark bg-dark',

        ]

    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-toggleable-xs collapse'],
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
            'options' => ['class' => 'btn btn-outline-success'],
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

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
