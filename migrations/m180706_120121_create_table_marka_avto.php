<?php

use yii\db\Migration;

/**
 * Class m180706_120121_create_table_avto
 */
class m180706_120121_create_table_marka_avto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('marka_avto', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'url' => $this->string(150),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('marka_avto');
    }
}
