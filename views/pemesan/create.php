<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pemesan */

$this->title = 'Create Pemesan';
$this->params['breadcrumbs'][] = ['label' => 'Pemesans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
