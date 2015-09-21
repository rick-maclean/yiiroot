<?php

use yii\db\Schema;
use yii\db\Migration;

class m150918_170258_add_isbn_to_book_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{book}}', 'isbn', 'varchar(32)');

    }

    public function down()
    {
        $this->dropColumn('{{book}}', 'isbn');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
