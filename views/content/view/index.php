<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 11:00 AM
 */

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\web\View;

$this->params['breadcrumbs'][] = $model->title;

/* @var $this View */
/* @var $model ContentPage */
?><h1 class="page-title">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<?php if ($model->body) : ?>
    <?= $model->body ?>
<?php endif; ?>
