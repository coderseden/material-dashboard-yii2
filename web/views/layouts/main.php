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
<body class="">
<!-- Extra Body details for Demo -->
<?php $this->beginBody() ?>
<div class="wrapper">

<?= $this->render(
	'left.php'
)
?>
    <div class="main-panel">
<?= $this->render(
	'header.php'
)
?>

<?= $this->render(
	'content.php',
	['content' => $content]
) ?>

<?= $this->render(
	'footer.php'
)
?>
    </div>
</div>

<?= $this->render(
	'plugin.php'
)
?>
<!--   Core JS Files   -->
  <script src="<?= \Yii::getAlias('@web/js/core/jquery.min.js');?>"></script>
  <script src="<?= \Yii::getAlias('@web/js/core/popper.min.js');?>"></script>
  <script src="<?= \Yii::getAlias('@web/js/core/bootstrap-material-design.min.js');?>"></script>
  <script src="<?= \Yii::getAlias('@web/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
<!-- Plugin for the momentJs  -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/moment.min.js');?>"></script>
<!--  Plugin for Sweet Alert -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/sweetalert2.js');?>"></script>
<!-- Forms Validations Plugin -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/jquery.validate.min.js');?>"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/jquery.bootstrap-wizard.js');?>"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/bootstrap-selectpicker.js');?>"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/bootstrap-datetimepicker.min.js');?>"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/jquery.dataTables.min.js');?>"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/bootstrap-tagsinput.js');?>"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/jasny-bootstrap.min.js');?>"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/fullcalendar.min.js');?>"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/jquery-jvectormap.js');?>"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/nouislider.min.js');?>"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
  <script src="<?= \Yii::getAlias('@web/js/plugins/arrive.min.js');?>"></script>
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
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
  </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
