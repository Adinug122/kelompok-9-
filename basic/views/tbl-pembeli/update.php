<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblPembeli */

$this->title = 'Update Tbl Pembeli: ' . $model->id_pembeli;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pembeli, 'url' => ['view', 'id' => $model->id_pembeli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pembeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
