<?php

namespace app\models\prodi;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id
 * @property string $nama_prodi
 * @property string $kaprodi
 * @property int $jumlah_mhs
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_prodi', 'kaprodi', 'jumlah_mhs'], 'required'],
            [['jumlah_mhs'], 'integer'],
            [['nama_prodi'], 'string', 'max' => 255],
            [['kaprodi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_prodi' => 'Nama Prodi',
            'kaprodi' => 'Kaprodi',
            'jumlah_mhs' => 'Jumlah Mhs',
        ];
    }
}
