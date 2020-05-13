<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m200423_133004_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->text(255),
            'password' => $this->text(255),
            'isAdmin' => $this->integer(11)->defaultValue(0),
            'photo' => $this->text(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
