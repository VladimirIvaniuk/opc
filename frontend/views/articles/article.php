<?php
    use yii\helpers\Url;
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>This is page one article</h1>
    </div>
    <div class="row">
        <div>
            <h1><?=$article->getFullText($article->title)?></h1>
            <p><?=$article->text?></p>
            <p><?=$article->date?></p>
            <span>Автор id:<?=$article->author_id?> | Likes: <?=$article->getDescription($article->likes, 'like')?> | View: <?=$article->getDescription($article->hits, 'hits')?> | <?=$article->myFun()?></span></div>
        <br>
        <p>back to <a href="<?=Url::to('articles') ?>">articles list >></a></p>
        <p>back to <a href="<?=Url::to(['site/contact'])?>"> contact >>></a></p>
    </div>

</div>