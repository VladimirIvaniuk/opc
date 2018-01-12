<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 28.12.2017
 * Time: 15:41
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Articles extends ActiveRecord
{
    public function getFullText($title)
    {
        return 'Статья ' . $title;
    }

    public function getShortText($text)
    {
        $text = mb_substr($text, 0, 300);
        $firstPos = strripos($text, ' ');
        $text = mb_substr($text, 0, $firstPos);
        return $text . ' ...';
    }

    public function getDescription($hits, $value)
    {
        $description = array(
            'like' => array('лайк', 'лайка', 'лайков'),
            'hits' => array('просмотр', 'просмотра', 'просмотров')
        );
        if (mb_substr($hits, -1) == 1) {
            return $hits . ' ' . $description[$value][0];
        } else if (mb_substr($hits, -1) > 1 && (mb_substr($hits, -1)<5)){
            return $hits . ' ' . $description[$value][1];
        } else{
            return $hits . ' ' . $description[$value][2];
        }
    }
    public function myFun(){
        echo "hello";
    }
}