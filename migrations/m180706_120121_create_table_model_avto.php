<?php

use yii\db\Migration;

/**
 * Class m180706_120121_create_table_avto
 */
class m180706_120121_create_table_model_avto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('model_avto', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'marka_avto' => $this->string(255),
            'url' => $this->string(150),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('model_avto');
    }
}
