<?php
namespace app\modules\interview\models;

use yii\db\ActiveRecord;

class Interview extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%interview}}';
    }

    public function rules()
    {
        return [
            [['application_id', 'interviewer', 'scheduled_at'], 'required'],
            [['application_id', 'scheduled_at'], 'integer'],
            [['feedback'], 'string'],
            [['interviewer', 'status'], 'string', 'max' => 255],
        ];
    }

    public function getApplication()
    {
        return $this->hasOne(\app\modules\admin\models\Application::class, ['id' => 'application_id']);
    }
}
