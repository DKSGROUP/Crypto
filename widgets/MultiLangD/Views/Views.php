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
            <?= Html::a('EU', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'EU']
            )); ?>
        </li>
        <li class="item-lang">
            <?= Html::a('RU', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'RU']
            )); ?>
        </li>
        <li class="item-lang">
            <?= Html::a('UA', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'UA']
            )); ?>
        </li>
    </ul>
</div>