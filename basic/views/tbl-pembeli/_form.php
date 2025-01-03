<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblPembeli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-pembeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pembeli')->textInput() ?>

    <?= $form->field($model, 'nama_pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barang_terjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_terjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pembeli')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
