<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 */
class m200423_131719_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'name' => $this->text(255),
            'email' => $this->text(255),
            'phone' => $this->text(255),
            'date' => $this->date(),
            'description' => $this->text(500),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('orders');
    }
}
