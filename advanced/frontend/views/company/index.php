<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>


<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'company-form']); ?> <!--company - название модели, которая будет обрабатывать, в нашем случае CompanyForm.php-->
        <?= $form->field($model, 'name') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'company-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
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
