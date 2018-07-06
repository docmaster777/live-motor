<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "model_avto".
 *
 * @property int $id
 * @property string $name
 * @property string $marka_avto
 * @property string $url
 */
class ModelAvto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'model_avto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'marka_avto'], 'string', 'max' => 255],
            [['url'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'marka_avto' => 'Marka Avto',
            'url' => 'Url',
        ];
    }
}
