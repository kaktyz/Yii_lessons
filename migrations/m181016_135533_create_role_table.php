<?php

use yii\db\Migration;

/**
 * Handles the creation of table `role`.
 */
class m181016_135533_create_role_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('role', [
            'role_id' => $this
                ->primaryKey(),
            'name' => $this
                ->string(50),
            'created_at' => $this
                ->dateTime(),
            'updated_at' => $this
                ->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('role');
    }
}
