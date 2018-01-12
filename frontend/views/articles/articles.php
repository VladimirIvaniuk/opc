<?php
use yii\helpers\Url;
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>This is page one article</h1>
    </div>
    <div class="row">
        <? foreach($articles as $article):?>
        <div class="col-lg-8">
            <h2><a href="<?=Url::to(['articles/article', 'id'=>$article->id])?>"><?=$article->getFullText($article->title)?></a></h2>
            <p><?=$article->getShortText($article->text)?></p>
            <p><a class="btn btn-default" href="<?=Url::to(['articles/article', 'id'=>$article->id])?>">Sumbit >>></a></p>
            <hr>
        </div>
        <? endforeach;?>
    </div>
</div>