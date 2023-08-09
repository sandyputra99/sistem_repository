<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property int $nim
 * @property string $nama_mahasiswa
 * @property int|null $jenis_kelamin
 * @property string $alamat
 * @property string $email
 * @property string $id_prodi
 * @property string $username
 * @property string $password
 * @property resource $foto
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    public $file_img;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama_mahasiswa', 'alamat', 'email', 'id_prodi', 'username', 'password', 'foto','img_url'], 'required'],
            [['nim', 'jenis_kelamin'], 'integer'],
            [['foto'],'string', 'max' => 255],
            [['nama_mahasiswa', 'alamat', 'id_prodi'], 'string', 'max' => 255],
            [['email', 'username', 'password'], 'string', 'max' => 50],
            [['file_img'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'id_prodi' => 'Id Prodi',
            'username' => 'Username',
            'password' => 'Password',
            'foto' => 'Foto',
        ];
    }
}
