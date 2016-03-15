<?php
    use yii\helpers\Html;
    
    \frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(isset($this->params['pageTitle']) ? $this->params['pageTitle'] : $this->title) ?></title>
    <?php $this->head() ?>
    <style type="text/css">
        body{font-family:PT Sans, sans-serif; font-size:14px; font-weight:normal; }
        h1{font-family:PT Sans, sans-serif; font-size:48px; font-weight:700; }
        h2{font-family:PT Sans, sans-serif; font-size:36px; font-weight:700; }
        h3{font-family:PT Sans, sans-serif; font-size:24px; font-weight:normal; }
        h4{font-family:PT Sans, sans-serif; font-size:18px; font-weight:700; }
        h5{font-family:ABeeZee, sans-serif; font-size:14px; font-weight:normal; }
        h6{font-family:Open Sans, sans-serif; font-weight:600; }
        #sp-section-1{ background-color:#ffffff; }
        #sp-bottom{ background-color:#fafafa;padding:60px 0px; }
    </style>
</head>

<body class="site com-content view-article no-layout no-task itemid-278 ru-ru ltr  layout-fluid">
<?php $this->beginBody() ?>

<div class="body-innerwrapper">
    <?=$this->render("//common/header") ?>
    <?=$content ?>
    <?=$this->render("//common/footer") ?>
</div>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>