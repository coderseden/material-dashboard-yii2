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

use yii\bootstrap4\ActiveForm;
?>
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <?php $form = ActiveForm::begin( [
	        'id'     => 'forgot-password-form',
	        'method' => 'post',
        ] ); ?>
          <div class="card card-login card-hidden">
            <div class="card-body ">
              <h3 class="card-title text-center"><?= \Yii::t('app', 'Forgot Password');?></h3>
                <div class="form-group has-default">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
	                <?= $form->field( $model, 'email', [
		                'template' => '{input}',
		                'options'  => [
			                'class' => 'form-group has-feedback',
			                'tag'   => false,
		                ]
	                ] )->textInput( [ 'placeholder' => 'Enter your email to reset your password' ] )->label( false ); ?>
                </div>
              </div>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-round"><?= \Yii::t('app', 'Reset');?></button>
            </div>
              <div class="card-footer justify-content-center">
              <a href="<?= \yii\helpers\Url::to(['/site/index']);?>"><?= \Yii::t('app', 'Back to login');?></a>
            </div>
          </div>
	      <?php ActiveForm::end(); ?>
      </div>
    </div>
</div>