<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m230717_122147_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(60),
            'auth_key' => $this->string(32)->notNull(),
            'password' => $this->string(),
            'role'=>$this->integer()
        ]);
        $this->addForeignKey('fk-role_id-user_role','{{%users}}','role','{{%roles}}','role_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-role_id-user_role','{{%users}}');
        $this->dropTable('{{%users}}');
    }
}
