<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles2sections".
 *
 * @property integer $id
 * @property integer $articleId
 * @property integer $sectionId
 */
class Articles2sections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles2sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articleId', 'sectionId'], 'required'],
            [['articleId', 'sectionId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articleId' => 'Article ID',
            'sectionId' => 'Section ID',
        ];
    }
}
