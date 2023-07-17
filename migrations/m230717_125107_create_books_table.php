<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m230717_125107_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'book_name' => $this->string(50),
            'book_description' => $this->text(),
            'author_id' => $this->integer()
        ]);

        $this->addForeignKey('fk-authors_id-books_author', '{{%books}}', 'id', '{{%authors}}', 'id');

        $this->insert('{{%books}}', [
            'book_name' => 'Чапаев и Пустота',
            'book_description' => '«Чапаев и Пустота» — третий роман Виктора Пелевина, написанный в 1996 году. 
            Сам автор характеризует свою работу как «первое произведение в мировой литературе, действие которого происходит в абсолютной пустоте». 
            В 1997 году роман был включён в список претендентов на Малую Букеровскую премию.',
            'author_id' => 1
        ]);
        $this->insert('{{%books}}', [
            'book_name' => 'Кысь',
            'book_description' => '«Кысь» — единственный роман Татьяны Толстой. Действие проходит на территории Москвы после некоего катаклизма, именуемого в романе «взрывом». 
            Этноцентрированная постапокалиптическая антиутопия пропитана иронией и сарказмом. Роман был задуман в 1986 году после чернобыльской катастрофы.',
            'author_id' => 2
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-authors_id-books_author', '{{%books}}');
        $this->dropTable('{{%books}}');
    }
}
