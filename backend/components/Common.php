<?php
namespace backend\components;

use yii\base\Component;
use yii\helpers\BaseFileHelper;
use yii\helpers\Url;

class Common extends Component{
    
    public function getSequenceNumbers($max = 10) {
        $numbers = [];
        
        for ($i=1; $i<=$max; $i++) {
            $numbers[$i] = $i;
        }
        
        return $numbers;
    }
}