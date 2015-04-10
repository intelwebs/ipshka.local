<?php

namespace frontend\controllers;

use app\models\Company;

class CompanyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $companies = Company::find()
            ->orderBy('name')
            ->all();

        return $this->render('index',
            ['companies' => $companies]
        );
    }

    public function actionDetail($id)
    {
        $company = Company::findOne($id);

        return $this->render('detail',
            ['company' => $company]
        );

    }

}
