<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kamar".
 *
 * @property integer $id
 * @property string $name
 * @property string $Description
 * @property integer $status
 */
class Kamar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kamar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'Description', 'status'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 5],
            [['Description'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'Description' => 'Description',
            'status' => 'Status',
        ];
    }
}
