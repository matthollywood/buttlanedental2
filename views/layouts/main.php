<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap col-lg-3 side-div" style="background-color:#41B6E6; height: 100%"></div>
<div class="wrap col-lg-6" style="background-color:#FFFFFF">
    <div style="text-align:center;">
    <?= Html::a('<img src="images/buttlanelogo.jpg" style="width: 40%; position: center;">',['site/index'])?>
    </div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <?= Html::a('Home', ['site/index'], ['class' => 'navbar-brand'])?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><?= Html::a('Care Plan', ['site/careplan'])?></a></li>
        <li class="dropdown">
        <?= Html::a('The Practice<span class="caret"></span>', ['site/thepractice'],['class' => 'dropdown-toggle','data-toggle' => 'dropdown','span class' => 'caret'], ['data-toggle' => 'dropdown'])?>
          <ul class="dropdown-menu">
          <li><?= Html::a('Facilities and Access', ['site/facilitiesandaccess'])?></a></li>
          <li><?= Html::a('Dentists', ['site/dentists'])?></a></li>
          <li><?= Html::a('Hygenists', ['site/hygenists'])?></a></li>
          <li><?= Html::a('Dental Nurses', ['site/dentalnurses'])?></a></li>
          <li><?= Html::a('Reception', ['site/reception'])?></a></li>
        </ul>
        <li><?= Html::a('Picture Gallery', ['site/picturegallery'])?></a></li>
        <li><?= Html::a('Treatments', ['site/treatments'])?></a></li>
        <li><?= Html::a('Emergencies', ['site/emergencies'])?></a></li>
        <li><?= Html::a('Contact Us', ['site/contactus'])?></a></li>
      </ul>
    </div>
  </div>
</nav>

    <div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    <footer class="footer" style="text-align:center;
  right: 0;
  bottom: 0;
  left: 0;">
    <div>
        <p>&copy; Butt Lane Dental Surgery <?= date('Y') ?></p>

    </div>
    </footer>
</div>

    <div class="wrap col-lg-3 side-div" style="background-color:#41B6E6; height: 100%"></div>
<?php $this->endBody() ?>


</body>


</html>
<?php $this->endPage() ?>
