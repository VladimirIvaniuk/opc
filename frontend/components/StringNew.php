<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 09.01.2018
 * Time: 16:40
 */

namespace frontend\components;
use Yii;

class StringNew
{

    private $limit;
    private $limitwords;

    /**
     * StringNew constructor.
     */
    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
        $this->limitwords = Yii::$app->params['limitWords'];
    }

    /**
     * @param $string
     * @param null $limit
     * @return string
     */
    public function shortString($string, $limit=null){
        if($limit===null){
            $limit=$this->limit;
        }
        $string = substr($string, 0, $limit);
        $firstPos = strripos($string, ' ');
        $string = substr($string, 0, $firstPos);
        return $string.'...';
    }

    /**
     * @param $string
     * @param null $limitwords
     * @return string
     */
    public function shortWords($string, $limitwords = null)
    {
        if($limitwords===null){
            $limitwords=$this->limitwords;
        }
        //Разбивает строку на подстроки
//        Возвращает массив строк, полученных разбиением строки string с использованием separator в качестве разделителя.
//        Если передан аргумент limit передан, массив будет содержать максимум limit элементов,
//        при этом последний элемент будет содержать остаток строки string.
        $string = explode(' ', $string, $limitwords + 1);
        //извлекаем последний элемент массива
        array_pop($string);
        //обьединяем элементы массива в строку
        $string = implode(' ', $string);
        return $string . ' ...';
    }


}