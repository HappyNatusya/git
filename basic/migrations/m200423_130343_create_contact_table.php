<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m200423_130343_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'email' => $this->text(255),
            'subject' => $this->text(255),
            'text' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
