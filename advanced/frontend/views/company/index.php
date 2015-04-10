<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>



<div class="company-form">
    <?php $form = ActiveForm::begin(['action' => Url::toRoute(['company/create'])]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>









<table>
    <?php

    foreach($companies as $company):?>
        <tr>
            <td><?=$company->id?></td>
            <td><?=$company->name?></td>
            <td><a href="<?=Url::toRoute(['company/detail', 'id' => $company->id])?>">подробнее</a></td>
        </tr>
    <?php endforeach;?>
</table>
