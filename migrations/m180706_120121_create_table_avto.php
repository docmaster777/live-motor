<?php

use yii\db\Migration;

/**
 * Class m180706_120121_create_table_avto
 */
class m180706_120121_create_table_avto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('avto', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'text' => $this->text(),
            'video' => $this->text(),
            'url' => $this->string(150),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('avto');
    }
}
