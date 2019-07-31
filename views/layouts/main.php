<?php

use frontend\themes\dancestudio\AppAsset;
use frontend\widgets\twigRender\TwigRender;
use common\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
$this->beginPage();
if ((Yii::$app->controller->id === 'site' && Yii::$app->controller->action->id === 'error') === false) {
    $this->registerLinkTag([
        'rel' => 'canonical',
        'href' => Url::canonical(),
    ]);
}
$this->registerLinkTag([
    'rel' => 'icon',
    'type' => 'image/x-icon',
    'href' => '/favicon.ico',
]);

/* @var $this \yii\web\View */
/* @var $content string */
?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="format-detection" content="telephone=no">
	<link rel="preload" href="fonts/sourcesanspro.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="fonts/sourcesansprobold.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="fonts/sourcesansprolight.woff2" as="font" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        <?= Yii::$app->settings->get('css', 'default') ?>
    </style>
</head>
<body class="page-<?= $_SERVER['REQUEST_URI'] == '/' ? 'front' : str_replace('/', '-', trim($_SERVER['REQUEST_URI'], '/')) ?>">
<?php $this->beginBody() ?>
<div class="container">
    <header class="header">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-5">
          <a class="header__logo" href="/">
            <img class="header__logo-img" src="img/logo.svg" alt="POLE PANTHERS">
            <div class="header__logo-text">Студия танца и спорта на пилоне</div>
          </a>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7">
          <nav class="main-nav main-nav--opened main-nav--no-js">
            <button class="main-nav__toggle" type="button"><span class="visually-hidden">Показать/скрыть меню</span></button>
            <ul class="main-menu ul-reset">
              <li class="main-menu__item">
                <a href="/">Главная</a>
              </li>
              <li class="main-menu__item">
                <a href="/beginners">Новичкам</a>
              </li>
              <li class="main-menu__item">
                <a href="/classes">Направления</a>
              </li>
              <li class="main-menu__item">
                <a href="/schedule-price">Расписание и цены</a>
              </li>
              <li class="main-menu__item">
                <a href="/about">О нас</a>
                <ul class="main-menu__submenu ul-reset">
                  <li class="main-menu__submenu-item">
                    <a href="/trainers">Тренеры</a>
                  </li>
                  <li class="main-menu__submenu-item">
                    <a href="/gallery">Галерея</a>
                  </li>
                  <li class="main-menu__submenu-item">
                    <a href="/rules">Правила студии</a>
                  </li>
                  <li class="main-menu__submenu-item">
                    <a href="/events">События</a>
                  </li>
                </ul>
              </li>
              <li class="main-menu__item">
                <a href="/shop">Магазин</a>
              </li>
              <li class="main-menu__item">
                <a href="/contacts">Контакты</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main>
    <?= Alert::widget() ?>
    <?= TwigRender::widget([
        'text' => $content,
    ]) ?>
    </main>

	<div class="subscription">
      <div class="subscription__title">Оставайтесь в курсе</div>
      <div class="subscription__descr">Подписывайтесь на наши соцсети, чтобы получать новости и уведомления</div>
      <form class="subscription__form">
        <input class="subscription__field" type="text" placeholder="Имя">
        <input class="subscription__field" type="text" placeholder="Фамилия">
        <input class="subscription__field" type="email" placeholder="Ваш e-mail" required="">
        <button class="subscription__submit button" type="submit">Подписаться</button>
      </form>
      <div class="subscription__note">Мы уважаем вашу конфиденциальность</div>
    </div>

    <footer class="footer">
      <ul class="social ul-reset">
        <li class="social__item">
          <a href="" class="social__link" target="_blank" rel="nofollow">
            <svg width="20" height="20" aria-hidden="true" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link" target="_blank" rel="nofollow">
            <svg width="20" height="20" aria-hidden="true" data-prefix="fab" data-icon="vk" class="svg-inline--fa fa-vk fa-w-18" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path></svg>
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link" target="_blank" rel="nofollow">
            <svg width="20" height="20" aria-hidden="true" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
          </a>
        </li>
      </ul>
      <div class="footer__text">&copy; 2019 Pole Panthers | тел: +7 909 857 47 17 | стадион “Динамо” ул. К-Маркса, 62 | <a href="/contacts">Контакты</a></div>
      <div class="footer__dev text-center"><a href="https://www.panteradigital.ru" target="_blank">Сделано ❤ Pantera Digital</a></div>
    </footer>
</div>
<?php $this->endBody() ?>
<?= Yii::$app->settings->get('script', 'default') ?>
</body>
</html>
<?php $this->endPage() ?>
