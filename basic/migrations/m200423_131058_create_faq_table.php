<?php

use yii\db\Migration;

/**
 * Handles the creation of table `faq`.
 */
class m200423_131058_create_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('faq', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'message' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('faq');
    }
}
