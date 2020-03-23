<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= \Yii::getAlias('@web/img/sidebar-1.jpg'); ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="https://www.coderseden.com" class="simple-text logo-normal">
          CodersEden
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/dashboard']);?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#yii2Example" aria-expanded="true">
              <i><img style="width:25px" src="<?= \Yii::getAlias('@web/img/yii-logo.svg'); ?>"></i>
              <p>Yii2 Examples
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse show" id="yii2Example">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?=\yii\helpers\Url::to(['/users']);?>">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> User Management </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=\yii\helpers\Url::to(['/site/profile']);?>">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/tables']);?>">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/typography']);?>">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/icons']);?>">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/map']);?>">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/notifications']);?>">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/rtl']);?>">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
        </ul>
      </div>
    </div>