<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account_good".
 *
 * @property string $id
 * @property integer $account_id
 * @property integer $product_id
 * @property double $count
 * @property double $price
 */
class AccountGood extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account_good';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_id', 'product_id'], 'integer'],
            [['count', 'price'], 'required'],
            [['count', 'price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_id' => 'Account ID',
            'product_id' => 'Product ID',
            'count' => 'Count',
            'price' => 'Price',
        ];
    }


    public function getGood()
    {
        return $this->hasOne(Good::className(), ['id' => 'good_id']); // id от Good соответствует good_id таблицы good
    }




}
