<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPembelianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-pembelian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detail') ?>

    <?= $form->field($model, 'barang_terjual') ?>

    <?= $form->field($model, 'jumlah_terjual') ?>

    <?= $form->field($model, 'id_pembelian') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
