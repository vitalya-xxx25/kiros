<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "bootstrap";
        
        $news       = \common\models\Articles::getArticlesBySectionId(1);
        $articles   = \common\models\Articles::getArticlesBySectionId(2);
        
        return $this->render('index', [
            'news'      => $news,
            'articles'  => $articles,
        ]);
    }
}