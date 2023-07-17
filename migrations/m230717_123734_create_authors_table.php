<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%authors}}`.
 */
class m230717_123734_create_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%authors}}', [
            'id' => $this->primaryKey(),
            'author_name' => $this->string(50),
            'author_surname' => $this->string(50),
            'author_age' => $this->integer()
        ]);

        $this->insert('{{%authors}}', [
            'author_name' => 'Виктор',
            'author_surname' => 'Пелевин',
            'author_age' => 60
        ]);
        $this->insert('{{%authors}}', [
            'author_name' => 'Татьяна',
            'author_surname' => 'Толстая',
            'author_age' => 72
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%authors}}');
    }
}
