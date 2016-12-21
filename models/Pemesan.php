<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pemesan".
 *
 * @property integer $id
 * @property string $ktp
 * @property string $description
 */
class Pemesan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pemesan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ktp', 'description'], 'required'],
            [['ktp'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ktp' => 'Ktp',
            'description' => 'Description',
        ];
    }
    
    public function getDropdownPemesan(){
    	return ArrayHelper::map(self::find()->all(), 'id', 'ktp');
    }
}
