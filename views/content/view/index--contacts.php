<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
?><div class="contacts">
	<h1 class="page-title"><?= Yii::$app->seo->getH1() ?></h1>
	<div class="row">
	  <div class="col-lg-6">
	    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1c7351b2a97d3151526c768c6037f0825451fd0c847f5d6707e2a6fa01fa86a8&amp;source=constructor"></iframe>
	  </div>
	  <div class="col-lg-6 contacts__content">
	    <div class="contacts__text">
	      <p>Наша студия расположена по адресу:<br>
	        <b>Стадион “Динамо” ул. К-Маркса, 62</b>
	      </p>
	      <p>контактный телефон:<br>
	        <b>+7 909 857 47 17</b>
	      </p>
	    </div>
	    <form class="contacts__form">
	      <div class="contacts__form-decsr">Здесь вы можете задать любой интересующий вас вопрос или записаться на занятие.</div>
	      <label class="contacts__form-label" for="your-name">Ваше имя</label>
	      <input class="contacts__form-field" type="text" id="your-name" name="your-name" placeholder="Ваше имя">
	      <label class="contacts__form-label" for="your-email">Ваш e-mail</label>
	      <input class="contacts__form-field" type="email" id="your-email" name="your-email" placeholder="Ваш e-mail" required="">
	      <label class="contacts__form-label" for="your-question">Задать вопрос</label>
	      <textarea class="contacts__form-textarea" id="your-question" name="your-question" placeholder="Задать вопрос"></textarea>
	      <button class="contacts__form-submit button" type="submit">Отправить</button>
	    </form>
	  </div>
	</div>
</div>
