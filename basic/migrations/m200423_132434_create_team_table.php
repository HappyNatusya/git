<?php

use yii\db\Migration;

/**
 * Handles the creation of table `team`.
 */
class m200423_132434_create_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('team', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(255),
            'name' => $this->text(255),
            'family' => $this->text(255),
            'inst' => $this->text(255),
            'vk' => $this->text(255),
            'fb' => $this->text(255),
            'job' => $this->text(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('team');
    }
}
