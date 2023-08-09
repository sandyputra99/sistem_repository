<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MahasiswaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama_mahasiswa') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'id_prodi') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
