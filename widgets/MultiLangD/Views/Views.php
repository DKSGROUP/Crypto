<?php
namespace widgets\MultiLangD\Views;
use yii\helpers\Html;
use Yii;
?>
<!--поменять цвет фона -->
<div class="btn-group <?= $cssClass = null; ?>">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="uppercase"><?= Yii::$app->language; ?></span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" style="color: #fff; background-color: rgba(51, 63, 87, 0.5);">
        <li class="item-lang" style="padding-left: 15px;">
            <?= Html::a('EN', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'EN']
            )); ?>
        </li>
        <li class="item-lang" style="padding-left: 15px;">
            <?= Html::a('RU', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'RU']
            )); ?>
        </li>
        <li class="item-lang" style="padding-left: 15px;">
            <?= Html::a('UA', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'UA']
            )); ?>
        </li>
    </ul>
</div>