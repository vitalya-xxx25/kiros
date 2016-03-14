<?php

use yii\db\Migration;

class m160314_114520_tbl_sections extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `sections` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `title` VARCHAR(255) NOT NULL,
                PRIMARY KEY (`id`)
            )
            COLLATE='utf8_general_ci'
            ENGINE=InnoDB
            ;
        ");
    }

    public function down()
    {
        $this->dropTable("sections");

        return false;
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
