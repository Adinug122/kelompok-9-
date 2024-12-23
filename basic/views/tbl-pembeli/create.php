<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblPembeli */

$this->title = 'Create Tbl Pembeli';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
