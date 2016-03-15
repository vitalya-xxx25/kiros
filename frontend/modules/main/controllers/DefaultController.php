<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "bootstrap";
        
        $news       = \common\models\Articles::getArticlesBySectionId(1, 4);
        $articles   = \common\models\Articles::getArticlesBySectionId(2, 4);
        
        return $this->render('index', [
            'news'      => $news,
            'articles'  => $articles,
        ]);
    }
    
    private function _getPrevCurrNextArticlesBySectionId($currArtId, $sectionId) {
        $selectedArts = [
            'prev' => [],
            'curr' => [],
            'next' => [],
        ];
        $articles = \common\models\Articles::getArticlesBySectionId($sectionId);
        
        if (!empty($articles)) {
            foreach ($articles as $art) {
                if (!empty($selectedArts['curr'])) {
                    $selectedArts['next'] = $art;
                    break;
                }
                if ($currArtId == $art['id']) {
                    $selectedArts['curr'] = $art;
                }
                else {
                    $selectedArts['prev'] = $art;
                }
            }
        }
        return $selectedArts;
    }

    public function actionViewArticle($id) {
        $this->layout = "blog";
        return $this->render('article', [
            'selectedArts'  => $this->_getPrevCurrNextArticlesBySectionId($id, 2)
        ]);
    }
    
    public function actionViewNews($id) {
        $this->layout = "blog";
        return $this->render('news', [
            'selectedArts'  => $this->_getPrevCurrNextArticlesBySectionId($id, 1)
        ]);
    }
    
    public function actionTarif() {
        $this->layout = "blog";
        return $this->render('tarif');
    }
    
    public function actionAbout() {
        $this->layout = "blog";
        return $this->render('about');
    }
}