<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<h1>Упс! <?= $exception->statusCode . ' ' . Html::encode($message) ?>..</h1>

<div class="error">

    <div class="h3">Без паники!</div>
    
    <p>Возможно запрашиваемая страница была перемещена по новому адресу в связи с обновлением сайта.</p>

    <p>В любом случае наши специалисты уже знают об этом и занимаются решением проблемы!</p>

    <br/>

    <a class="btn btn-lg btn-default" href="/catalog">Перейти в каталог</a>

    &nbsp;

    <a class="btn btn-lg btn-primary" href="/">На главную страницу »</a>
</div>

<br/><br/>
