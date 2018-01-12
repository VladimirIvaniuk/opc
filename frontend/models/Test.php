<?php

namespace frontend\models;
use Yii;


/**
 * Class Test
 * @package frontend\models
 */
class Test{
    /**
     * @param integer $max
     * @return array
     */
    public static function getNewsList($max)
    {
        //конвертируем переменную в int
        $max = intval($max);

        // делаем sql запрос
        $sql='SELECT * from news LIMIT ' .$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();

        // содаем обьект класса
//        $helper = Yii::$app->stringHelper;
        $newhelp=Yii::$app->stringNew;

        //если массив не пуст и это массив, то проходим по цыклу
        if(!empty($result)&& is_array($result)){
            foreach ($result as &$item){
                //функция getShort() принимает два аргумента сам текст, и не обязательный лимит символов(по умолчанию 60)
//                $item['content'] = $helper->getShort($item['content']);
//                $item['content'] = $newhelp->shortString($item['content']);
                $item['content'] = $newhelp->shortWords($item['content']);
            }
        }
        return $result;

    }

    /**
     * @param integer $id
     * @return array|false
     */
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * from news WHERE id = $id";
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}