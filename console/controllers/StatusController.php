<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 11.01.2018
 * Time: 18:53
 */

namespace console\controllers;
use yii\console\Controller;

class StatusController extends Controller
{
    public function actionTest()
    {
        echo 'Status Test';
        die;
    }
}