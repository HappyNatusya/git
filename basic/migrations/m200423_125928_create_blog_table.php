<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blog`.
 */
class m200423_125928_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'name' => $this->text(255),
            'content' => $this->text(10000),
            'img' => $this->text(255),
            'date' => $this->date(),
            'views' => $this->integer(11),
            'idCategory' => $this->integer(11),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blog');
    }
}
