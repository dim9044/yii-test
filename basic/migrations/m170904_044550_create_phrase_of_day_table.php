<?php

use yii\db\Migration;

/**
 * Handles the creation of table `phrase_of_day`.
 */
class m170904_044550_create_phrase_of_day_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("
            CREATE TABLE `phrase_of_day` (
             `id_phrase` int(11) NOT NULL AUTO_INCREMENT,
             `text` varchar(400) NOT NULL COMMENT 'Фраза',
             `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
             `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
             PRIMARY KEY (`id_phrase`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица с фразами дня'
        ");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('phrase_of_day');
    }
}



/*
 *
 * INSERT INTO `phrase_of_day` (`id_phrase`, `text`, `date_created`, `date_updated`) VALUES
(1, 'Фраза дня 1', '2017-09-04 20:37:46', '2017-09-04 20:37:46'),
(2, 'Фраза дня 2', '2017-09-04 20:37:52', '2017-09-04 20:37:52'),
(3, 'Фраза дня 3', '2017-09-04 20:37:58', '2017-09-04 20:37:58'),
(4, 'Фраза дня 4', '2017-09-04 20:38:02', '2017-09-04 20:38:02'),
(5, 'Фраза дня 5', '2017-09-04 20:38:07', '2017-09-04 20:38:07'),
(6, 'Фраза дня 6', '2017-09-04 20:38:10', '2017-09-04 20:38:10');
 */
