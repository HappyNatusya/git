<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 * @property string $family
 * @property string $photo
 * @property string $job
 * @property string $vk
 * @property string $insta
 * @property string $fb
 * @property string $idLogin
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'family', 'photo', 'job', 'vk', 'insta', 'fb', 'idLogin'], 'required'],
            [['idLogin'], 'string'],
            [['name', 'family', 'photo', 'job', 'vk', 'insta', 'fb'], 'string', 'max' => 255],
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
            'family' => 'Family',
            'photo' => 'Photo',
            'job' => 'Job',
            'vk' => 'Vk',
            'insta' => 'Insta',
            'fb' => 'Fb',
            'idLogin' => 'Id Login',
        ];
    }
}
