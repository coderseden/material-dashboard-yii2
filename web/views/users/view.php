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
use yii\widgets\DetailView;
?>
<div class="content">
    <div class="container-fluid">
        <div class="card ">
    <div class="card-header card-header-primary card-header-icon">
        <div class="card-icon">
            <i class="material-icons">account_box</i>
        </div>
        <h4 class="card-title">
            <?=$model->getFullName();?>
            <div class="pull-right">
                <?= Html::a(Html::tag('b', 'keyboard_arrow_left', ['class' => 'material-icons']) , ['index'], [
                    'class' => 'btn btn-xs btn-success btn-round btn-fab',
                    'rel'=>"tooltip",
                    'data' => [
                        'placement' => 'bottom',
                        'original-title' => 'Back'
                    ],
                ]) ?>
                <?= Html::a(Html::tag('b', 'create', ['class' => 'material-icons']) , ['update', 'id' => $model->user_id], [
                    'class' => 'btn btn-xs btn-success btn-round btn-fab',
                    'rel'=>"tooltip",
                    'data' => [
                        'placement' => 'bottom',
                        'original-title' => 'Edit User'
                    ],
                ]) ?>
                <?= Html::a(Html::tag('b', 'delete', ['class' => 'material-icons']), ['delete', 'id' => $model->user_id], [
                    'class' => 'btn btn-xs btn-danger btn-round btn-fab',
                    'rel'=>"tooltip",
                    'data' => [
                        'confirm' => \Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                        'placement' => 'bottom',
                        'original-title' => 'Delete User'
                    ],
                ]) ?>
            </div>
        </h4>
    </div>
    <div class="card-body">
        <?= DetailView::widget([
	        'model' => $model,
	        'attributes' => [
		        'user_id',
		        'first_name',
		        'last_name',
		        [
			        'label' => 'Group Name',
			        'value' => ($model->group_id) ? Html::a($model->group->name, ['/admin/groups/view', 'id' => $model->group_id]) : \Yii::t('app', 'No Group'),
			        'format' => 'raw',
		        ],
		        'email:email',
		        [
			        'label' => 'Status',
			        'attribute' => 'status',
			        'value'     => function($model) {
				        return \Yii::t('app',ucfirst(\yii\helpers\Html::encode($model->status)));
			        },
		        ],
		        'created_at',
		        'updated_at',
	        ],
        ]) ?>
    </div>
</div>
    </div>
</div>
