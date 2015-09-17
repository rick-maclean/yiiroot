<?php

use yii\db\Schema;
use yii\db\Migration;

class m150917_172931_create_author_table extends Migration
{
    public function up()
    {
        $this->createTable('{{author}}', [
            'id' => Schema::TYPE_PK,
            'firstname' => Schema::TYPE_STRING . " NOT NULL",
            'sirname' => Schema::TYPE_STRING . " NOT NULL",
            'biography' => Schema::TYPE_STRING . " NOT NULL",     
        ]);
    }

    public function down()
    {
        $this->dropTable('{{author}}');
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
