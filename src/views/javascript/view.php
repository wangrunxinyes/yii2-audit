<?php

/** @var yii\web\View $this */
/** @var bedezign\yii2\audit\models\AuditJavascript $model */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = Yii::t('audit', 'JS #{id}', ['id' => $model->id]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('audit', 'Audit'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('audit', 'JS'), 'url' => ['index']];
$this->params['breadcrumbs'][] = '#' . $model->id;

echo Html::tag('h1', $this->title);

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        [
            'attribute' => 'entry_id',
            'value' => $model->entry_id ? Html::a($model->entry_id, ['entry/view', 'id' => $model->entry_id]) : '',
            'format' => 'raw',
        ],
        'type',
        'origin',
        'message',
    ],
]);

//print_r($model->data);