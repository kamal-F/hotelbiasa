<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Kamar;
use app\models\Pemesan;
/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'id_kamar')->dropDownList(Kamar::getDropdownKamar()) ?>

    <?= $form->field($model, 'tagihan')->textInput() ?>

    <?= $form->field($model, 'id_pemesan')->dropDownList(Pemesan::getDropdownPemesan()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
