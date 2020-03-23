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

use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
?>
<div class="content">
    <div class="container-fluid">
        <div class="card ">
    <div class="card-header card-header-primary card-header-icon">
        <div class="card-icon">
            <i class="material-icons">account_box</i>
        </div>
        <h4 class="card-title">
            <?=$model->isNewRecord ? \Yii::t('app', 'Create User') : \Yii::t('app', 'Update User')?>
            <div class="pull-right">
                <?= Html::a(Html::tag('b', 'keyboard_arrow_left', ['class' => 'material-icons']) , ['index'], [
                    'class' => 'btn btn-xs btn-success btn-round btn-fab',
                    'rel'=>"tooltip",
                    'data' => [
                        'placement' => 'bottom',
                        'original-title' => 'Back'
                    ],
                ]) ?>
            </div>
        </h4>
    </div>
    <div class="card-body">
      <?php $form = ActiveForm::begin([
	      'fieldConfig' => [
		      'template' => "{input} {error}",
	      ]
      ]); ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'first_name');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'first_name');?></label>
                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'first_name');?></span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'last_name');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'last_name');?></label>
	                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'last_name');?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'email');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'email');?></label>
	                <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'email');?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'passwd');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'passwd');?></label>
	                <?= $form->field($model, 'passwd')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'passwd');?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer ml-auto mr-auto">
        <?= Html::submitButton($model->isNewRecord ? \Yii::t('app', 'Create') : \Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	<?php ActiveForm::end(); ?>
</div>
    </div>
</div>