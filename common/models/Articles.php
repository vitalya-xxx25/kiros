<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $text
 * @property integer $userId
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $published
 * @property integer $deleted
 * @property integer $sequenceNumber
 */
class Articles extends \yii\db\ActiveRecord
{
    public $section;
    public $sectionTitle;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'userId', 'created_at', 'updated_at', 'section', 'sequenceNumber'], 'required'],
            [['text'], 'string'],
            [['userId', 'created_at', 'updated_at', 'published', 'deleted', 'sequenceNumber', 'section'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255]
        ];
    }
    
    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['title', 'description', 'text', 'section', 'sequenceNumber'];
        return $scenarios;
    }
    
    public function afterFind(){
        $section = $this->getSectionName($this->id);

        if (!empty($section)) {
            $this->section      = $section['id'];
            $this->sectionTitle = $section['title'];
        }
        
//        $this->created_at = Yii::$app->formatter->asDatetime($this->created_at);
//        $this->updated_at = Yii::$app->formatter->asDatetime($this->updated_at);
    }
    
    public function afterSave($insert, $changedAttributes){
        parent::afterSave($insert, $changedAttributes);
        $art2sect = Articles2sections::find()->where(['articleId' => $this->id])->one();
        if (empty($art2sect)) {
            $art2sect = new Articles2sections();
        }
        $art2sect->sectionId = $this->section;
        $art2sect->articleId = $this->id;
        $art2sect->save();
    }
    
    public function getSectionName($articleId) {
        $query = new \yii\db\Query();
        $query->addSelect(['*'])
            ->from ([Sections::tableName().' s'])
            ->innerJoin(Articles2sections::tableName().' a2s','a2s.articleId = '.$articleId)
            ->where('s.id = a2s.sectionId');
        return $query->one();
    }
    
//    public function getSectionName(){
//        return $this->hasMany(Sections::className(), ['id' => 'sectionId'])       
//            ->viaTable(Articles2sections::tableName(), ['articleId' => 'id']);
//    }
    
    public function getUser(){
        return $this->hasOne(\backend\models\User::className(),['id' => 'userId']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'text' => 'Text',
            'userId' => 'User ID',
            'created_at' => 'Date Create',
            'updated_at' => 'Date Update',
            'published' => 'Published',
            'deleted' => 'Deleted',
            'sequenceNumber' => 'Sequence Number',
        ];
    }
    
    public function getArticlesBySectionId($sectionId, $limit = false) {
        $query = new \yii\db\Query();
        $query->addSelect(['a.*'])
            ->from ([Articles::tableName().' a'])
            ->innerJoin(Articles2sections::tableName().' a2s','a2s.sectionId = '.$sectionId)
            ->where('a.id = a2s.articleId')
            ->orderBy(['sequenceNumber' => SORT_ASC]);
        
        if ($limit) {
            $query->limit((int)$limit);
        }
        
        return $query->all();
    }
}
