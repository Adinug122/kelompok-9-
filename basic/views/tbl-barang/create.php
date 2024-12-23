<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblBarang */

$this->title = 'Create Tbl Barang';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
