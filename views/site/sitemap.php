<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Карта сайта';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="title-home">
    <?= $this->title ?>
</h1>
<div class="row">
	<div class="col-md-4">
		<div class="h2">Разделы</div>
		<ul>
		    <?php foreach ($links1 as $link) : ?>
		        <li style="margin-top: 5px;">
		            <?= Html::a($link['anchor'], $link['url']) ?>
		        </li>
		    <?php endforeach; ?>
		</ul>
		<div class="h2">Статьи</div>
		<ul>
		    <?php foreach ($links2 as $link) : ?>
		        <li style="margin-top: 5px;">
		            <?= Html::a($link['anchor'], $link['url']) ?>
		        </li>
		    <?php endforeach; ?>
		</ul>
	</div>
	<div class="col-md-4">
		<div class="h2">Каталог</div>
		<ul>
		    <?php foreach ($links3 as $link) : ?>
		        <li style="margin-top: 5px;">
		            <?= Html::a($link['anchor'], $link['url']) ?>
		        </li>
		    <?php endforeach; ?>
		</ul>
	</div>
	<div class="col-md-4">
		<div class="h2">Акции и скидки</div>
		<ul>
		    <?php foreach ($links4 as $link) : ?>
		        <li style="margin-top: 5px;">
		            <?= Html::a($link['anchor'], $link['url']) ?>
		        </li>
		    <?php endforeach; ?>
		</ul>
	</div>
</div>
