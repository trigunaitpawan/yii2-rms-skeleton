<?php
namespace app\modules\applicant\controllers;

use Yii;
use app\modules\applicant\models\Applicant;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ProfileController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view',['model'=>$this->findModel($id)]);
    }

    public function actionEdit($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view','id'=>$model->id]);
        }
        return $this->render('edit',['model'=>$model]);
    }

    protected function findModel($id)
    {
        if (($model = Applicant::findOne($id)) !== null) return $model;
        throw new NotFoundHttpException('Applicant not found.');
    }
}
