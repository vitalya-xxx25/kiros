<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property integer $id
 * @property integer $title
 */
class Sections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
    
    public function getAll()
    {
        $sections = Sections::find()->all();
        $result = \yii\helpers\ArrayHelper::map($sections, 'id', 'title');
        return $result;
    }
}
