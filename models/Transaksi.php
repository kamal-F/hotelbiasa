<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property integer $id
 * @property integer $id_kamar
 * @property integer $tagihan
 * @property integer $id_pemesan
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kamar', 'tagihan', 'id_pemesan'], 'required'],
            [['id_kamar', 'tagihan', 'id_pemesan'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kamar' => 'Id Kamar',
            'tagihan' => 'Tagihan',
            'id_pemesan' => 'Id Pemesan',
        ];
    }
    
    //relasi ke kamar
    public function getKamar(){
    	return $this->hasOne(Kamar::className(), ['id'=>'id_kamar']);
    }
}
