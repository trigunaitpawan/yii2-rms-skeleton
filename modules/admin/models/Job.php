<?php
namespace app\modules\admin\models;

use yii\db\ActiveRecord;

class Job extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%job}}';
    }

    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'location'], 'string', 'max' => 255],
        ];
    }

    public function getApplications()
    {
        return $this->hasMany(Application::class, ['job_id' => 'id']);
    }
}
