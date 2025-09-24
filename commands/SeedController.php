<?php
namespace app\commands;

use yii\console\Controller;
use app\common\models\User;
use app\modules\admin\models\Job;
use Yii;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $u = new User();
        $u->username = 'admin';
        $u->email = 'admin@example.com';
        $u->auth_key = Yii::$app->security->generateRandomString();
        $u->password_hash = Yii::$app->security->generatePasswordHash('admin123');
        $u->role = 'admin';
        $u->created_at = time();
        $u->save(false);

        $job = new Job();
        $job->title = 'Sample PHP Developer';
        $job->description = 'Sample description';
        $job->location = 'Remote';
        $job->status = 1;
        $job->created_at = time();
        $job->save(false);

        echo "Seeded admin and sample job.\n";
    }
}
