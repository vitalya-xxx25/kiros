<?php

use yii\db\Migration;

class m160314_122026_tbl_articles2sections extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `articles2sections` (
                `id` INT(10) NOT NULL AUTO_INCREMENT,
                `articleId` INT(10) NOT NULL,
                `sectionId` INT(10) NOT NULL,
                PRIMARY KEY (`id`)
            )
            ENGINE=InnoDB
            ;
        ");
    }

    public function down()
    {
        $this->dropTable("articles2sections");

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
