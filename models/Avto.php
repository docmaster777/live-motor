<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avto".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $video
 * @property string $url
 */
class Avto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'video'], 'string'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'text' => 'Text',
            'video' => 'Video',
            'url' => 'Url',
        ];
    }
}
