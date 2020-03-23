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
    use yii\grid\GridView;
    use yii\widgets\Pjax;
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">account_box</i>
          </div>
          <h4 class="card-title">
              Users
              <div class="pull-right">
                <?= Html::a(Html::tag('b', 'add', ['class' => 'material-icons']) , ['create'], [
                    'class' => 'btn btn-xs btn-primary btn-round btn-fab',
                    'rel'=>"tooltip",
                    'data' => [
                        'placement' => 'bottom',
                        'original-title' => 'Add User'
                    ],
                ]) ?>
              </div>
          </h4>
        </div>
        <div class="card-body">
          <div class="material-datatables">
              <?php Pjax::begin([
                  'enablePushState'=>true,
              ]); ?>
              <?= GridView::widget([
                  'id' => 'users',
                  'tableOptions' => [
                      'class' => 'table table-striped table-no-bordered table-hover',
                  ],
                  'options'          => ['class' => 'table-responsive grid-view'],
                  'dataProvider' => $dataProvider,
                  'filterModel' => $searchModel,
                  'columns' => [
                      'first_name',
                      'last_name',
                      'email:email',
                      [
                          'attribute'=>'created_at',
                      ],
                      [
                          'attribute' => 'status',
                          'value'     => function($model) {
                              return\Yii::t('app',ucfirst(\yii\helpers\Html::encode($model->status)));
                          },
                          'filter'    => Html::activeDropDownList($searchModel, 'status', $searchModel->getStatusesList(), ['class' => 'form-control', 'prompt' => 'All'])
                      ],
                      [
                          'header' =>\Yii::t('app','Actions'),
                          'class' => '\yii\grid\ActionColumn',
                          'contentOptions' => [
                              'class'=>'table-actions'
                          ],
                          'template' => '{view} {update} {delete}',
                          'buttons'  => [
	                          'view' => function ($url, $model) {
		                          return Html::a(
			                          '<i class="fa fa-eye"></i>',
			                          \yii\helpers\Url::to(['/users/view', 'id' => $model->user_id]),
			                          [
				                          'rel'                      => "tooltip",
				                          'data-original-title'      => 'View this user',
				                          'data-placement'           => 'top',
				                          'style'                    => 'margin-right: 10px'
			                          ]
		                          );
	                          },
	                          'update' => function ($url, $model) {
		                          return Html::a(
			                          '<i class="fa fa-edit"></i>',
			                          \yii\helpers\Url::to(['/users/update', 'id' => $model->user_id]),
			                          [
				                          'rel'                      => "tooltip",
				                          'data-original-title'      => 'Edit this user',
				                          'data-placement'           => 'top',
				                          'style'                    => 'margin-right: 10px'
			                          ]
		                          );
	                          },
	                          'delete' => function ($url, $model) {
		                          return Html::a(
			                          '<i class="fa fa-trash-o"></i>',
			                          \yii\helpers\Url::to(['/users/delete', 'id' => $model->user_id]),
			                          [
				                          'rel'                      => "tooltip",
				                          'data-original-title'      => 'Delete this user?',
				                          'data-placement'           => 'top',
				                          'data-pjax'                => '0',
				                          'data-confirm'             => 'Are you sure you want to delete this item?',
				                          'data-method'              => 'post',
				                          'style'                    => 'margin-right: 10px'
			                          ]
		                          );
	                          },
                          ]
                      ],
                  ],
              ]); ?>
              <?php Pjax::end(); ?>
          </div>
        </div>
      </div>
    </div>
</div>
    </div>
</div>
