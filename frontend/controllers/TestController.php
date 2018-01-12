<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 05.01.2018
 * Time: 14:54
 */

namespace frontend\controllers;


use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{

    public function actionIndex()
    {
//        $email = Yii::$app->params['adminEmail'];
//        echo $email;die;
        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($max);
//        print_r($list);die;
        return $this->render('index', compact('list'));
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('ivanyuk85vladimir@gmail.com')
            ->setTo('ivanyuk85vladimir@gmail.com')
            ->setSubject('тема сообщения')
            ->setTextBody('текст сообщения')
            ->setHtmlBody('<h1>Текст сообщения в формате HTML</h1>')
            ->send();
    }

    public function actionView($id){

        $item = Test::getItem($id);
        return $this->render('view', compact('item'));
    }
}