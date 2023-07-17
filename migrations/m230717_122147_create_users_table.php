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
            'password' => $this->string(50),
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
