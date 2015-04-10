<?php
use yii\helpers\Url;
?>

<table>
<?php

//var_dump($accounts);

foreach($accounts as $account):?>
    <tr>
        <td><?=$account->num?></td>
        <td><?=$account->date?></td>
        <td>Company</td>
        <td><a href="<?=Url::toRoute(['account/detail', 'id' => $account->id])?>">счет подробнее</a></td>
    </tr>
<?php endforeach;?>
</table>
