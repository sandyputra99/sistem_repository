<?php

use app\models\Prodi\Prodi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Prodi\ProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'header' => 'No',
            'class' => 'yii\grid\SerialColumn'
            ],

            //'id',
            'nama_prodi',
            'kaprodi',
            'jumlah_mhs',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Prodi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
