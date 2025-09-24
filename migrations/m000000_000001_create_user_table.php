<?php
use yii\db\Migration;

class m000000_000001_create_user_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id'=>$this->primaryKey(),
            'username'=>$this->string(255)->notNull()->unique(),
            'email'=>$this->string(255)->notNull()->unique(),
            'password_hash'=>$this->string(255)->notNull(),
            'auth_key'=>$this->string(32)->null(),
            'role'=>$this->string(50)->defaultValue('applicant'),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
