<?php use yii\helpers\Url;

$this->title=$item['title'];?>


    <h1><?= $item['title']?></h1>
    <p><?= $item['content']?></p>

<a class="btn btn-default" href="<?= Url::to(['test/index'])?>">return</a>