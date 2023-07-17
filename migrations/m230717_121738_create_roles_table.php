<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%roles}}`.
 */
class m230717_121738_create_roles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%roles}}', [
            'role_id' => $this->primaryKey(),
            'role_name' => $this->string(50)
        ]);
        $this->insert('{{%roles}}', [
            'role_name' => 'Админ'
        ]);
        $this->insert('{{%roles}}', [
            'role_name' => 'Пользователь'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%roles}}');
    }
}
