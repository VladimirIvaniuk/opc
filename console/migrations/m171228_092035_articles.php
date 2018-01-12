<?php

use yii\db\Migration;

/**
 * Class m171228_092035_articles
 */
class m171228_092035_articles extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('articles',[
           'id'=>$this->primaryKey(),
            'title'=>$this->string(200)->notNull(),
            'text'=>$this->string(2000),
            'author_id'=>$this->integer(),
            'alias'=>$this->string(200),
            'date'=>$this->date('Y-m-d'),
            'likes'=>$this->integer(),
            'hits'=>$this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171228_092035_articles cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171228_092035_articles cannot be reverted.\n";

        return false;
    }
    */
}
