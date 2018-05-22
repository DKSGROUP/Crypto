<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    NavBar::begin([
        'brandLabel' => '<img src="img/logo/logo.png"; class="logo">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-fixed-top',
        ]

    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-center'],
        'items' => [
            ['label' => 'О нас', 'url' => ['/site/index']],
            ['label' => 'Продукты', 'url' => ['/site/about']],
            ['label' => 'Преимущества', 'url' => ['/site/contact']],
            ['label' => 'Отчетность', 'url' => ['/site/contact']],
            ['label' => 'Вопросы', 'url' => ['/site/contact']],
            ['label' => 'Новости', 'url' => ['/site/contact']],
            ['label' => 'Новости',  ]
//            ,
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
        ],
    ]);
    echo "<a class=\"btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3\" href=\"https://github.com/twbs/bootstrap/archive/v4.0.0.zip\">Download</a>";
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
