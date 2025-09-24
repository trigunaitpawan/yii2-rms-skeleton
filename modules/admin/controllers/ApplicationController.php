<?php
namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Application;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ApplicationController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Application::find()->with(['job','applicant']),
        ]);
        return $this->render('index',['dataProvider'=>$dataProvider]);
    }

    public function actionView($id)
    {
        return $this->render('view',['model'=>$this->findModel($id)]);
    }

    protected function findModel($id)
    {
        if (($model = Application::findOne($id)) !== null) return $model;
        throw new NotFoundHttpException('Application not found.');
    }
}
