<?php
$this->title = $account->num;
$this->params['breadcrumbs'][] = 'Счета';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Счет № <?=$account->num?></h1>
<p>Дата: <?=$account->date?></p>
<p>Компания: <?=$account->company->name?> </p>
<p>Номенклатура: </p>

<?php
//var_dump($account->company);
//var_dump($goods);

foreach($goods as $good){
    $summ = $good->count * $good->price;
    echo $good->good->name.'-'.$good->count.'-'.$good->price.' Сумма:'.$summ. '<br><br>';
    $total += $summ;
    $summ = 0;
}
?>

<p>Сумма итого: <?=$total?></p>