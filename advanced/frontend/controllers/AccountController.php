<?php

namespace frontend\controllers;

use app\models\Account;
//use app\models\Company;

class AccountController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $accounts = Account::find()
            ->orderBy('date')
            ->all();

        return $this->render('index',
            ['accounts' => $accounts]
            );
    }

    public function actionDetail($id)
    {

        $account = Account::findOne($id);
        $test = $account->getCompany->all();
        var_dump($test);

        return $this->render('detail',
            ['account' => $account]
        );

    }

}
