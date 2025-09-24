<?php
namespace app\modules\interview\controllers;

use Yii;
use app\modules\interview\models\Interview;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class InterviewController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Interview::find()->with(['application']),
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionSchedule($application_id)
    {
        $model = new Interview();
        $model->application_id = $application_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view','id'=>$model->id]);
        }

        return $this->render('schedule',['model'=>$model]);
    }

    public function actionView($id)
    {
        return $this->render('view',['model'=>$this->findModel($id)]);
    }

    public function actionFeedback($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view','id'=>$model->id]);
        }

        return $this->render('feedback',['model'=>$model]);
    }

    protected function findModel($id)
    {
        if (($model = Interview::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('Interview not found.');
    }
}
