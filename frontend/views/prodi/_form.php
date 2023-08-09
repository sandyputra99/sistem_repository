<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Prodi\Prodi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kaprodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_mhs')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
