<?php

namespace frontend\controllers;

use app\models\Account;
use app\models\AccountGood;

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

        $goods = AccountGood::find() // where account_id = $id
                ->where(['account_id' => $id])
            ->with('good')
            ->all(); // with('good') - в выборку добавить данные из связанной таблицы good

        return $this->render('detail',
            ['account' => $account,
            'goods' => $goods]
        );

    }

}
