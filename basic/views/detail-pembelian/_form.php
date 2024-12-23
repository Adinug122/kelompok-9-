<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPembelian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-pembelian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_detail')->textInput() ?>

    <?= $form->field($model, 'barang_terjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_terjual')->textInput() ?>

    <?= $form->field($model, 'id_pembelian')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
