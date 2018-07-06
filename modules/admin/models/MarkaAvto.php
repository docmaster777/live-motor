<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "marka_avto".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 */
class MarkaAvto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marka_avto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
            'url' => 'Url',
        ];
    }
}
