<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */

$this->title = 'Create Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
