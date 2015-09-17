<?php

use yii\db\Schema;
use yii\db\Migration;

class m150917_172921_create_book_table extends Migration
{
    public function up()
    {
        $this->createTable('{{book}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . " NOT NULL",
            'description' => Schema::TYPE_STRING . " NOT NULL",
            'author_id'=> Schema::TYPE_INTEGER,        
        ]);
    }

    public function down()
    {
        $this->dropTable('{{book}}');
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
