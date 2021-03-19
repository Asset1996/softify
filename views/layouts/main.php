<?php

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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="main_menu_div">
        <?php
        NavBar::begin([
            'brandLabel' => 'SOFTIFY',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'main_menu navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Главное', 'url' => ['/site/index']],
                ['label' => 'Портфолио', 'url' => ['/site/about']],
                ['label' => 'Контакты', 'url' => ['/site/contact']],
            ],
        ]);
        NavBar::end();
        ?>
    </div>
    <div class="container"></div>
    <?= $content ?>
    <div class="callback">
        <img src="/images/icons/chat.png" alt="chat softify.kz">
    </div>
    <a href="tel: +77023216996">
        <div class="callback_call _anim_item">
            <img src="/images/icons/call.png" alt="call softify.kz">
        </div>
    </a>
    <a href="https://api.whatsapp.com/send/?phone=77023216996&text=Здравствуйте.+Я+бы+хотел+получить+консультацию.">
        <div class="callback_whatsapp _anim_item">
            <img src="/images/icons/whatsapp.png" alt="whatsapp softify.kz">
        </div>
    </a>
    <a href="#">
        <div class="callback_insta _anim_item">
            <img src="/images/icons/insta.png" alt="instagram softify.kz">
        </div>
    </a>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;  SOFTIFY <?= date('Y') ?></p>
        <p class="pull-right">Мангистау, г. Актау</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
