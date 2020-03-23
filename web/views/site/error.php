<?php

/**
 *
 * @package    Material Dashboard Yii2
 * @author     CodersEden <hello@coderseden.com>
 * @link       https://www.coderseden.com
 * @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
 * @license    MIT - https://www.coderseden.com
 * @since      1.0
 */

$this->title = $name;
?>
<div class="content-center">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title" style="color:white"><?= \yii\helpers\Html::encode($this->title) ?></h1>
        <h2><?= nl2br(\yii\helpers\Html::encode($message)) ?></h2>
      </div>
    </div>
</div>