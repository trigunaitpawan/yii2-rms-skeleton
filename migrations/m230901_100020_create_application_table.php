<?php
use yii\db\Migration;

class m230901_100020_create_application_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%application}}', [
            'id' => $this->primaryKey(),
            'job_id' => $this->integer()->notNull(),
            'applicant_id' => $this->integer()->notNull(),
            'cover_letter' => $this->text()->null(),
            'status' => $this->string(50)->defaultValue('pending'),
            'created_at' => $this->integer(),
        ]);

        $this->addForeignKey('fk_application_job', '{{%application}}', 'job_id', '{{%job}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_application_applicant', '{{%application}}', 'applicant_id', '{{%applicant}}', 'id', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_application_job', '{{%application}}');
        $this->dropForeignKey('fk_application_applicant', '{{%application}}');
        $this->dropTable('{{%application}}');
    }
}
