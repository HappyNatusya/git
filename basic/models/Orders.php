<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $date
 * @property string $description
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'date', 'description'], 'required'],
            // [['date'], 'safe', 'unique'],
            [['phone'], 'string', 'min' => 5, 'max' => 15],
            [['date'], 'unique'],
            [['email'], 'email'],
            [['name', 'email'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ваше имя',
            'email' => 'Email',
            'phone' => 'Ваш номер телефона',
            'date' => 'Предполагаемая дата',
            'description' => 'Описание',
        ];
    }
}
