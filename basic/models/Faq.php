<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property string $name
 * @property string $message
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'message'], 'required'],
            [['name', 'message'], 'string'],
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
            'message' => 'Message',
        ];
    }
}
