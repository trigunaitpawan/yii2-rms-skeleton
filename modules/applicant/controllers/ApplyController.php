<?php
namespace app\modules\applicant\controllers;

use Yii;
use app\modules\admin\models\Application;
use yii\web\Controller;

class ApplyController extends Controller
{
    public function actionCreate($job_id,$applicant_id)
    {
        $model = new Application();
        $model->job_id = $job_id;
        $model->applicant_id = $applicant_id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/admin/application/view','id'=>$model->id]);
        }
        return $this->render('create',['model'=>$model]);
    }
}
