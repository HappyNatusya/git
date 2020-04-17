<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogTag".
 *
 * @property int $id
 * @property int $idBlog
 * @property int $idTag
 *
 * @property Blog $blog
 * @property Tags $tag
 */
class Blogtag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogTag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBlog', 'idTag'], 'required'],
            [['idBlog', 'idTag'], 'integer'],
            [['idBlog'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['idBlog' => 'id']],
            [['idTag'], 'exist', 'skipOnError' => true, 'targetClass' => Tags::className(), 'targetAttribute' => ['idTag' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idBlog' => 'Id Blog',
            'idTag' => 'Id Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'idBlog']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tags::className(), ['id' => 'idTag']);
    }
}
