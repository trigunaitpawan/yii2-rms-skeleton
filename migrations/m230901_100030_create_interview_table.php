<?php
use yii\db\Migration;

class m230901_100030_create_interview_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%interview}}', [
            'id' => $this->primaryKey(),
            'application_id' => $this->integer()->notNull(),
            'interviewer' => $this->string(255)->notNull(),
            'scheduled_at' => $this->integer()->notNull(),
            'feedback' => $this->text()->null(),
            'status' => $this->string(50)->defaultValue('scheduled'),
        ]);

        $this->addForeignKey('fk_interview_application', '{{%interview}}', 'application_id', '{{%application}}', 'id', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_interview_application', '{{%interview}}');
        $this->dropTable('{{%interview}}');
    }
}
