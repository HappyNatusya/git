<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $img
 * @property string $date
 * @property int $views
 * @property int $idCategory
 * @property string $description
 *
 * @property Bookmark[] $bookmarks
 * @property Comments[] $comments
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'content', 'img', 'date', 'views', 'idCategory', 'description'], 'required'],
            [['date'], 'safe'],
            [['views', 'idCategory'], 'integer'],
            [['description'], 'string'],
            [['name', 'img'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 10000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'content' => 'Содержание',
            'img' => 'Изображения',
            'date' => 'Дата',
            'views' => 'Просмотры',
            'idCategory' => 'Id Категории',
            'description' => 'Описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookmarks()
    {
        return $this->hasMany(Bookmark::className(), ['idName' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['idArchive' => 'id']);
    }



    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'idCategory']);
    }
}