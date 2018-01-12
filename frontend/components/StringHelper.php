<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 06.01.2018
 * Time: 7:26
 */

namespace frontend\components;

use Yii;

/**
 * Class StringHelper
 * @package frontend\components
 */
class StringHelper
{
    //определяем свойство limit
    private $limit;

    /**
     * StringHelper constructor.
     * в конструкторе определяем этот limit, беря данные из params
     */
    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
    }

    /**
     * @param $string
     * @param null $limit
     * @return string
     */
    public function getShort($string, $limit=null)
    {
        if($limit===null){
            $limit=$this->limit;
        }
        $string= substr($string, 0, $limit);
        //ограничеваем последним пробелом и добовляем "..."
        $firstPos = strripos($string, ' ');
        $string = substr($string, 0, $firstPos);
        return $string . ' ...';
    }
}