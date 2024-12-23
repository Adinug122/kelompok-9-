<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\stok */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_stok')->textInput() ?>

    <?= $form->field($model, 'tanggal_restock')->textInput() ?>

    <?= $form->field($model, 'total_harga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_barang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
