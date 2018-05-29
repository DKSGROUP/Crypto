<?php
namespace widgets\MultiLangD\Views;
use yii\helpers\Html;
use Yii;
?>

<div class="btn-group <?= $cssClass = null; ?>">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="uppercase"><?= Yii::$app->language; ?></span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li class="item-lang">
            <?= Html::a('en', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'en']
            )); ?>
        </li>
        <li class="item-lang">
            <?= Html::a('ru', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'ru']
            )); ?>
        </li>
        <li class="item-lang">
            <?= Html::a('ua', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'ua']
            )); ?>
        </li>
    </ul>
</div>