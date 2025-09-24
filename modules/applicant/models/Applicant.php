<?php
namespace app\modules\applicant\models;

use yii\db\ActiveRecord;
use app\common\models\User;

class Applicant extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%applicant}}';
    }

    public function rules()
    {
        return [
            [['user_id', 'full_name', 'email'], 'required'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['skills'], 'string'],
            [['email'], 'email'],
            [['full_name', 'resume'], 'string', 'max' => 255],
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
