<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


/**
 * This is the model class for table "company".
 *
 * @property string $id
 * @property string $name
 */

class CompanyForm extends Model
{
    public $name;


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
            'name' => 'Name',
        ];
    }
}
