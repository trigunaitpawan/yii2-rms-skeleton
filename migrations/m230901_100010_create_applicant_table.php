<?php
use yii\db\Migration;

class m230901_100010_create_applicant_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%applicant}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'full_name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull()->unique(),
            'phone' => $this->string(20)->null(),
            'resume' => $this->string(255)->null(),
            'skills' => $this->text()->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk_applicant_user',
            '{{%applicant}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_applicant_user', '{{%applicant}}');
        $this->dropTable('{{%applicant}}');
    }
}
