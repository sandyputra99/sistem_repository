<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prodi\Prodi $model */

$this->title = 'Update Prodi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
