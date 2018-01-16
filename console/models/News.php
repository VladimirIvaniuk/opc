<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 12.01.2018
 * Time: 18:26
 */

namespace console\models;

use Yii;

class News
{
    const STATUS_NOT_SEND = 1;
    //получить список новостей
    public static function getList()
    {
        $sql = 'SELECT * from news WHERE status = '. self::STATUS_NOT_SEND;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return self::prepareList($result);
    }

    //подготовить список
    public static function prepareList($result)
    {
        $newhelp=Yii::$app->stringNew;
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
}