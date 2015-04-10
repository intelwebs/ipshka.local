<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property string $id
 * @property string $date
 * @property integer $num
 * @property integer $id_company
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'num', 'id_company'], 'required'],
            [['date'], 'safe'],
            [['num', 'id_company'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'num' => 'Num',
            'id_company' => 'Id Company',
        ];
    }



    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }



}
