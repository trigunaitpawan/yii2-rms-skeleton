<?php
namespace app\modules\admin\models;

use yii\db\ActiveRecord;

class Application extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%application}}';
    }

    public function rules()
    {
        return [
            [['job_id', 'applicant_id'], 'required'],
            [['job_id', 'applicant_id', 'created_at'], 'integer'],
            [['cover_letter'], 'string'],
            [['status'], 'string', 'max' => 50],
        ];
    }

    public function getJob()
    {
        return $this->hasOne(Job::class, ['id' => 'job_id']);
    }

    public function getApplicant()
    {
        return $this->hasOne(\app\modules\applicant\models\Applicant::class, ['id' => 'applicant_id']);
    }
}
