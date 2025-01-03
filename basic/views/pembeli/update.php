<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pembeli */

$this->title = 'Update Pembeli: ' . $model->id_pembeli;
$this->params['breadcrumbs'][] = ['label' => 'Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pembeli, 'url' => ['view', 'id' => $model->id_pembeli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
