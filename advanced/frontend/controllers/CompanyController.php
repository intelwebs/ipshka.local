<?php

namespace frontend\controllers;

use Yii;
use app\models\Company;

class CompanyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $companies = Company::find()
            ->orderBy('name')
            ->all();


        $model = new Company(); // Для добавления новых данных в базу

        return $this->render('index',
            ['companies' => $companies,
                'model' => $model]
        );

    }

    public function actionDetail($id)
    {
        $company = Company::findOne($id);

        return $this->render('detail',
            ['company' => $company]
        );

    }


    public function actionCreate()
    {
        $model = new Company();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

}
