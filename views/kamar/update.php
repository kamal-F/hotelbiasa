<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kamar */

$this->title = 'Update Kamar: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
   		'status' => $status,
    ]) ?>

</div>
