<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property int $id
 * @property string $nama_fakultas
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_fakultas'], 'required'],
            [['nama_fakultas'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_fakultas' => 'Nama Fakultas',
        ];
    }
}
