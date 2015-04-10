<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property string $id
 * @property string $name
 */
class Company extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'company';
    }


    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255]
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }



    public function actionDetail($id)
    {
        $company = Company::findOne($id);

        return $this->render('detail',
            ['company' => $company]
        );

    }

}
