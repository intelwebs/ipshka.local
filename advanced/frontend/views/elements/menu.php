<?php
use yii\helpers\Url;
?>


<ul class="nav nav-tabs">
    <li role="presentation"  <?php if($_SERVER['REQUEST_URI'] == Url::toRoute('account/index')) echo 'class="active"' ?>>
        <a href="<?php echo Url::toRoute('account/index')?>">
            Счета

        </a>
    </li>
    <li role="presentation"  <?php if($_SERVER['REQUEST_URI'] == Url::toRoute('act/index')) echo 'class="active"' ?>>
        <a href="<?php echo Url::toRoute('act/index')?>">
            Акты

        </a>
    </li>
    <li role="presentation"  <?php if($_SERVER['REQUEST_URI'] == Url::toRoute('bank/index')) echo 'class="active"' ?>>
        <a href="<?php echo Url::toRoute('bank/index')?>">
            Банк

        </a>
    </li>
    <li role="presentation"  <?php if($_SERVER['REQUEST_URI'] == Url::toRoute('company/index')) echo 'class="active"' ?>>
        <a href="<?php echo Url::toRoute('company/index')?>">
            Контрагенты

        </a>
    </li>
    <li role="presentation"  <?php if($_SERVER['REQUEST_URI'] == Url::toRoute('good/index')) echo 'class="active"' ?>>
        <a href="<?php echo Url::toRoute('good/index')?>">
            Номенклатура

        </a>
    </li>
    <li role="presentation"  <?php if($_SERVER['REQUEST_URI'] == Url::toRoute('tax/index')) echo 'class="active"' ?>>
        <a href="<?php echo Url::toRoute('tax/index')?>">
            Налоги

        </a>
    </li>
    <li role="presentation"  <?php if($_SERVER['REQUEST_URI'] == Url::toRoute('doc/index')) echo 'class="active"' ?>>
        <a href="<?php echo Url::toRoute('doc/index')?>">
            Отчетность

        </a>
    </li>
</ul>
