<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m200423_132100_create_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),
            'name' => $this->text(255),
            'img' => $this->text(),
            'description' => $this->text(),
            'client' => $this->text(255),
            'skills' => $this->text(255),
            'date_start' => $this->date(),
            'date_end' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('portfolio');
    }
}
