<?php
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
$this->beginPage();
?>
<!--
=========================================================
 Yii2 Framework Material Dashboard - v1.0.0
=========================================================

 Product Page: https://www.coderseden.com/product/material-dashboard-yii2
 Copyright 2020 CodersEden (https://www.coderseden.com)
 Licensed under MIT (https://opensource.org/licenses/MIT)

 Developed by CodersEden

 =========================================================
 Material Dashboard - v2.1.2
 =========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2020 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

 =========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Extra details for Demo -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-57x57.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-114x114.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-72x72.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-144x144.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-60x60.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-120x120.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-76x76.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= \Yii::getAlias('@web/img/favicon/apple-touch-icon-152x152.png');?>" />
    <link rel="icon" type="image/png" href="<?= \Yii::getAlias('@web/img/favicon/favicon-196x196.png');?>" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?= \Yii::getAlias('@web/img/favicon/favicon-96x96.png');?>" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?= \Yii::getAlias('@web/img/favicon/favicon-32x32.png');?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= \Yii::getAlias('@web/img/favicon/favicon-16x16.png');?>" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?= \Yii::getAlias('@web/img/favicon/favicon-128.png');?>" sizes="128x128" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?= \Yii::getAlias('@web/img/favicon/mstile-144x144.png');?>" />
    <meta name="msapplication-square70x70logo" content="<?= \Yii::getAlias('@web/img/favicon/mstile-70x70.png');?>" />
    <meta name="msapplication-square150x150logo" content="<?= \Yii::getAlias('@web/img/favicon/mstile-150x150.png');?>" />
    <meta name="msapplication-wide310x150logo" content="<?= \Yii::getAlias('@web/img/favicon/mstile-310x150.png');?>" />
    <meta name="msapplication-square310x310logo" content="<?= \Yii::getAlias('@web/img/favicon/mstile-310x310.png');?>" />
    <meta name="author" content="CodersEden.com" />
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?= \Yii::getAlias('@web/css/material-dashboard.css?v=2.1.2'); ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= \Yii::getAlias('@web/demo/demo.css'); ?>" rel="stylesheet" />
	<?= Html::csrfMetaTags() ?>
    <title>Material Dashboard Yii2 - Free Frontend Preset for Yii2 Framework</title>
	<?php $this->head() ?>
</head>
<body class="off-canvas-sidebar">
<!-- Extra Body details for Demo -->
<?php $this->beginBody() ?>
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="#pablo">Material Dashboard Yii2</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../dashboard.html" class="nav-link">
              <i class="material-icons">dashboard</i> Dashboard
            </a>
          </li>
          <li class="nav-item ">
            <a href="../pages/register.html" class="nav-link">
              <i class="material-icons">person_add</i> Register
            </a>
          </li>
          <li class="nav-item  active ">
            <a href="../pages/login.html" class="nav-link">
              <i class="material-icons">fingerprint</i> Login
            </a>
          </li>
          <li class="nav-item ">
            <a href="../pages/lock.html" class="nav-link">
              <i class="material-icons">lock_open</i> Lock
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- End Navbar -->
<div class="wrapper wrapper-full-page" style="background-image: url(<?= \Yii::getAlias('@web/img/login.jpg'); ?>); background-size: cover; background-position: top center;">
    <div class="page-header header-filter">
        <?= $content ?>
        <footer class="footer">
        <div class="container">
          <nav class="float-left">
            <ul>
          <li>
            <a href="https://www.coderseden.com">
              CodersEden
            </a>
          </li>
          <li>
            <a href="https://www.coderseden.com/page/terms-and-conditions">
              Terms
            </a>
          </li>
          <li>
            <a href="https://www.coderseden.com/blog">
              Blog
            </a>
          </li>
        </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.coderseden.com" target="_blank">CodersEden</a> and <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
</div>
<!--   Core JS Files   -->
  <script src="<?= \Yii::getAlias('@web/js/core/jquery.min.js');?>"></script>
  <script src="<?= \Yii::getAlias('@web/js/core/popper.min.js');?>"></script>
  <script src="<?= \Yii::getAlias('@web/js/core/bootstrap-material-design.min.js');?>"></script>
  <script src="<?= \Yii::getAlias('@web/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
<!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/chartist.min.js');?>"></script>
<!--  Notifications Plugin    -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/bootstrap-notify.js');?>"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= \Yii::getAlias('@web/js/material-dashboard.js?v=2.1.2');?>" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= \Yii::getAlias('@web/demo/demo.js');?>"></script>
  <script src="<?= \Yii::getAlias('@web/js/plugin.js');?>" type="text/javascript"></script>

  <script>
    $(document).ready(function() {
        md.checkFullPageBackgroundImage();
        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700);
    });
  </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
