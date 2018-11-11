<?php
use yii\db\Migration;
/**
 * Handles the creation of table `users`.
 */
class m181016_124936_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    //Для наката миграции
    public function safeUp()
    {
        $this->createTable('users', [
            //autoinc + prim key
            'id' => $this->primaryKey(),
            //varchar
            'login' => $this
                ->string(50)
                ->notNull(),
            'password' => $this
                ->string(100)
                ->notNull(),
            'role' => $this
                ->integer()
                ->defaultValue(1),
            'email' => $this
                ->string()
                ->notNull(),
            'created_at' => $this
                ->dateTime(),
            'updated_at' => $this
                ->dateTime()
        ]);
        $this->createIndex("ix_users_login", "users", "login");
    }

    /**
     * {@inheritdoc}
     */
    //Для отката миграции(двинуться по цепочке назад), без safeDown() откат невозможен
    public function safeDown()
    {
        //Код для отката к предыдущей миграции
        $this->dropTable('users');
    }
}