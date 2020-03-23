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
<html lang="fa" dir="rtl">

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
  <title>
    داشبورد متریال توسط تیم خلاق
  </title>
    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
  <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">
    <!-- CSS Files -->
  <link href="<?= \Yii::getAlias('@web/css/material-dashboard.css?v=2.1.2'); ?>" rel="stylesheet" />
  <link href="<?= \Yii::getAlias('@web/css/material-dashboard-rtl.css?v=1.1'); ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= \Yii::getAlias('@web/demo/demo.css');?>" rel="stylesheet" />
    <!-- Style Just for persian demo purpose, don't include it in your project -->
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4 {
        font-family: "Cairo";
    }
  </style>
</head>

<body class="">
<!-- Extra Body details for Demo -->
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= \Yii::getAlias('@web/img/sidebar-1.jpg');?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          كوديرز أيدن
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/dashboard']);?>">
              <i class="material-icons">dashboard</i>
              <p>داشبورد</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/users']);?>">
              <i class="material-icons">person</i>
              <p>پروفایل کاربر</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/tables']);?>">
              <i class="material-icons">content_paste</i>
              <p>جدول</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/typography']);?>">
              <i class="material-icons">library_books</i>
              <p>تایپوگرافی</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/icons']);?>">
              <i class="material-icons">bubble_chart</i>
              <p>آیکن‌ها</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/map']);?>">
              <i class="material-icons">location_ons</i>
              <p>نقشه</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/notifications']);?>">
              <i class="material-icons">notifications</i>
              <p>اعلان‌ها</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/rtl']);?>">
              <i class="material-icons">language</i>
              <p>پشتیبانی از راست به چپ</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">داشبورد</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="جستجو...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    آمارها
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">۵</span>
                  <p class="d-lg-none d-md-block">
                    اعلان‌ها
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">محمدرضا به ایمیل شما پاسخ داد</a>
                  <a class="dropdown-item" href="#">شما ۵ وظیفه جدید دارید</a>
                  <a class="dropdown-item" href="#">از حالا شما با علیرضا دوست هستید</a>
                  <a class="dropdown-item" href="#">اعلان دیگر</a>
                  <a class="dropdown-item" href="#">اعلان دیگر</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    حساب کاربری
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">فضا مصرف شده</p>
                  <h3 class="card-title">49/50
                    <small>GB</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">فضای بیشتری داشته باشید...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">سود</p>
                  <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>۲۴ ساعت اخیر
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">مشکلات حل شده</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> توسط گیت‌هاب
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">دنبال‌کننده</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> هم‌اکنون
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">فروش روزانه</h4>
                  <p class="card-category">
                    <span class="text-success">
                      <i class="fa fa-long-arrow-up"></i> 55% </span> رشد در فروش امروز.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> ۴ دقیقه پیش
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">دنبال کننده‌های ایمیلی</h4>
                  <p class="card-category">کارایی آخرین کمپین</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> کمپین دو روز پیش ارسال شد
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">وظایف انجام شده</h4>
                  <p class="card-category">کارایی آخرین کمپین</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> کمپین دو روز پیش ارسال شد
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">وظایف:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> باگ‌ها
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> وبسایت
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> سرور
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن؟</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند؟</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>همان حال کار آنها به نوعی وابسته به متن می‌باشد
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید؟</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی؟</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td> از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی ؟
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند؟</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">آمار کارکنان</h4>
                  <p class="card-category">کارکنان جدید از ۱۵ آبان ۱۳۹۶</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>کد</th>
                      <th>نام</th>
                      <th>حقوق</th>
                      <th>استان</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>احمد حسینی</td>
                        <td>$36,738</td>
                        <td>مازندران</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>مینا رضایی</td>
                        <td>$23,789</td>
                        <td>گلستان</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>مبینا احمدپور</td>
                        <td>$56,142</td>
                        <td>تهران</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>جلال آقایی</td>
                        <td>$38,735</td>
                        <td>شهرکرد</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">اعلان ها</h3>
                  <p class="card-category">ایجاد شده توسط دوست ما
                    <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. لطفا
                    <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">مستندات کامل </a> را مشاهده بکنید.
                  </p>
                </div>
                <div class="card-body">
                  <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      این یک اعلان است که با کلاس "alert-warning" ایجاد شده است.</span>
                  </div>
                  <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      این یک اعلان است که با کلاس "alert-primary" ایجاد شده است.</span>
                  </div>
                  <div class="alert alert-info alert-with-icon" data-notify="container">
                    <i class="material-icons" data-notify="icon">add_alert</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span data-notify="پیام">این یک اعلان با دکمه بستن و آیکن است</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="<?= \Yii::getAlias('@web/img/faces/marc.jpg');?>" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">مدیرعامل / مدیرفنی</h6>
                  <h4 class="card-title">خداداد عزیزی</h4>
                  <p class="card-description">
                    طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند ...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">دنبال‌کردن</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <nav class="float-left">
              <ul>
                <li>
                  <a href="https://www.coderseden.com">
                    كوديرز أيدن
                  </a>
                </li>
                <li>
                  <a href="http://www.coderseden.com/blog">
                    بلاگ
                  </a>
                </li>
              </ul>
            </nav>
            <div class="copyright float-right">
              &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, ساخته شده با
              <i class="material-icons">favorite</i> توسط
               <a href="https://www.coderseden.com">كوديرز أيدن</a>&<a href="https://www.creative-tim.com" target="_blank">تیم خلاق</a> برای وب بهتر.
            </div>
          </div>
        </footer>
      </div>
    </div>
      <!--   Core JS Files   -->
    <script src="<?= \Yii::getAlias('@web/js/core/jquery.min.js');?>" type="text/javascript"></script>
    <script src="<?= \Yii::getAlias('@web/js/core/popper.min.js');?>" type="text/javascript"></script>
    <script src="<?= \Yii::getAlias('@web/js/core/bootstrap-material-design.min.js');?>" type="text/javascript"></script>
    <script src="<?= \Yii::getAlias('@web/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
      <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Chartist JS -->
    <script src="<?= \Yii::getAlias('@web/js/plugins/chartist.min.js');?>"></script>
      <!--  Notifications Plugin    -->
    <script src="<?= \Yii::getAlias('@web/js/plugins/bootstrap-notify.js');?>"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= \Yii::getAlias('@web/js/material-dashboard.min.js?v=2.1.2');?>" type="text/javascript"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= \Yii::getAlias('@web/demo/demo.js');?>"></script>
    <script>
      $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          md.initDashboardPageCharts();

      });
    </script>
    <script>
      $(document).ready(function() {
          $().ready(function() {
              $sidebar = $('.sidebar');
              $sidebar_img_container = $sidebar.find('.sidebar-background');

              $full_page = $('.full-page');

              $sidebar_responsive = $('body > .navbar-collapse');
              sidebar_mini_active = true;

              window_width = $(window).width();

              fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

              // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
              //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
              //         $('.fixed-plugin .dropdown').addClass('show');
              //     }
              //
              // }

              $('.fixed-plugin a').click(function(event) {
                  // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                  if ($(this).hasClass('switch-trigger')) {
                      if (event.stopPropagation) {
                          event.stopPropagation();
                      } else if (window.event) {
                          window.event.cancelBubble = true;
                      }
                  }
              });

              $('.fixed-plugin .background-color span').click(function() {
                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('color');

                  if ($sidebar.length != 0) {
                      $sidebar.attr('data-color', new_color);
                  }

                  if ($full_page.length != 0) {
                      $full_page.attr('filter-color', new_color);
                  }

                  if ($sidebar_responsive.length != 0) {
                      $sidebar_responsive.attr('data-color', new_color);
                  }
              });

              $('.fixed-plugin .img-holder').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).parent('li').siblings().removeClass('active');
                  $(this).parent('li').addClass('active');


                  var new_image = $(this).find("img").attr('src');

                  if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                      $sidebar_img_container.fadeOut('fast', function() {
                          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                          $sidebar_img_container.fadeIn('fast');
                      });
                  }

                  if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                      var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                      $full_page_background.fadeOut('fast', function() {
                          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                          $full_page_background.fadeIn('fast');
                      });
                  }

                  if ($('.switch-sidebar-image input:checked').length == 0) {
                      var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                      var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                      $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                      $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  }

                  if ($sidebar_responsive.length != 0) {
                      $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                  }
              });

              $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
                  $full_page_background = $('.full-page-background');

                  $input = $(this);

                  if ($input.is(':checked')) {
                      if ($sidebar_img_container.length != 0) {
                          $sidebar_img_container.fadeIn('fast');
                          $sidebar.attr('data-image', '#');
                      }

                      if ($full_page_background.length != 0) {
                          $full_page_background.fadeIn('fast');
                          $full_page.attr('data-image', '#');
                      }

                      background_image = true;
                  } else {
                      if ($sidebar_img_container.length != 0) {
                          $sidebar.removeAttr('data-image');
                          $sidebar_img_container.fadeOut('fast');
                      }

                      if ($full_page_background.length != 0) {
                          $full_page.removeAttr('data-image', '#');
                          $full_page_background.fadeOut('fast');
                      }

                      background_image = false;
                  }
              });

              $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                  var $btn = $(this);

                  if (sidebar_mini_active == true) {
                      $('body').removeClass('sidebar-mini');
                      sidebar_mini_active = false;
                      materialDashboard.showSidebarMessage('Sidebar mini deactivated...');
                  } else {
                      $('body').addClass('sidebar-mini');
                      sidebar_mini_active = true;
                      materialDashboard.showSidebarMessage('Sidebar mini activated...');
                  }

                  // we simulate the window Resize so the charts will get updated in realtime.
                  var simulateWindowResize = setInterval(function() {
                      window.dispatchEvent(new Event('resize'));
                  }, 180);

                  // we stop the simulation of Window Resize after the animations are completed
                  setTimeout(function() {
                      clearInterval(simulateWindowResize);
                  }, 1000);
              });
          });
          if (window_width > 767) {
              if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                  $('.fixed-plugin .dropdown').addClass('show');
                  $('.fixed-plugin .dropdown-menu').addClass('show');
              }
          }
      });
    </script>
</body>

</html>