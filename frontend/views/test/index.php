<?php
use yii\helpers\Url;
$this->title='test';
?>

<?php foreach ($list as $item): ?>

    <h1><a href="<?php echo Url::to(['test/view', 'id'=> $item['id']]); ?>">
        <?php echo $item['title']; ?>
        </a></h1>

    <p><?= $item['content']?></p>

    <br>

<?php endforeach;?>

