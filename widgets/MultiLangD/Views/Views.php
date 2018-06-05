<?php
namespace widgets\multiLangD\views;
use yii\helpers\Html;
use Yii;
?>
<!--поменять цвет фона -->
<div class="btn-group <?= $cssClass = null; ?>">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="uppercase"><?= Yii::$app->language; ?></span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" style="color: #fff; background-color: rgba(51, 63, 87, 0.98);">
        <li class="item-lang" style="padding-left: 15px;">
            <?= Html::a('en', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'en']
            )); ?>
        </li>
        <li class="item-lang" style="padding-left: 15px;">
            <?= Html::a('ru', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'ru']
            )); ?>
        </li>
        <li class="item-lang" style="padding-left: 15px;">
            <?= Html::a('ua', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'ua']
            )); ?>
        </li>
    </ul>
</div>