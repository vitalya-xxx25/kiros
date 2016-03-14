<?php

use yii\db\Migration;

class m160314_092130_tbl_articles extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `articles` (
                `id` INT(10) NOT NULL AUTO_INCREMENT,
                `title` VARCHAR(255) NOT NULL,
                `description` VARCHAR(255) NULL DEFAULT NULL,
                `text` TEXT NULL,
                `userId` INT(10) NOT NULL,
                `dateCreate` INT(11) NOT NULL,
                `dateUpdate` INT(11) NOT NULL,
                `published` TINYINT(1) NOT NULL DEFAULT '0',
                `deleted` TINYINT(1) NOT NULL DEFAULT '0',
                `sequenceNumber` INT(2) NOT NULL DEFAULT '1',
                PRIMARY KEY (`id`),
                INDEX `FK_articles_user` (`userId`)
            )
            ENGINE=InnoDB;
        ");
    }

    public function down()
    {
        $this->dropTable("advert");

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
