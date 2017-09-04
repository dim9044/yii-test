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
        $this->createTable('phrase_of_day', [
            'id' => $this->primaryKey(),
            'teax' => $this->text()->notNull(),
            'date_created' => $this->timestamp()->,
            'date_updated' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('phrase_of_day');
    }
}
