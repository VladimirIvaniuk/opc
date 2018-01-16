<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 11.01.2018
 * Time: 18:53
 */

namespace console\controllers;
use yii\console\Controller;
use Yii;
use console\models\News;

class MailerController extends Controller
{
    public function actionSend()
    {
//        $result = Yii::$app->mailer->compose()
//            ->setFrom('ivanyuk85vladimir@gmail.com')
//            ->setTo('ivanyuk85vladimir@gmail.com')
//            ->setSubject('тема сообщения')
//            ->setTextBody('текст сообщения')
//            ->setHtmlBody('<h1>Текст сообщения в формате HTML</h1>')
//            ->send();
//        var_dump($result);die;
        $list = News::getList();
        print_r($list);die;
    }

    public function actionTest()
    {
        echo 'Test';
        die;
    }
}