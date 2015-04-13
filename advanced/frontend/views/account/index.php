<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
//use yii\helpers\Link;


$this->title = 'Счета';
$this->params['breadcrumbs'][] = $this->title;
?>




<table class="table table-striped">
<?php

//var_dump($accounts);

foreach($accounts as $account):?>
    <tr>
        <td><?=$account->num?></td>
        <td><?=$account->date?></td>
        <td><?=$account->company->name?></td>
        <td><a href="<?=Url::toRoute(['account/detail', 'id' => $account->id])?>">счет подробнее</a></td>
    </tr>
<?php endforeach;?>
</table>
