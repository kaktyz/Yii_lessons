<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tasks`.
 */
class m181023_113219_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->createTable('tasks', [
          'id' => $this->primaryKey(),
          'name' => $this->string()->notNull(),
          'date' => $this->dateTime()->notNull(),
          'description' => $this->text(),
           'user_id' => $this->integer(),
           'created_at' => $this
               ->dateTime(),
           'updated' => $this
               ->dateTime()
       ]);

       $this->addForeignKey('fk_task_users', 'tasks', 'user_id', 'users', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
    }
}
