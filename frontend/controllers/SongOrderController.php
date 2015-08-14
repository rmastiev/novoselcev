<?php
namespace frontend\controllers;

use Yii;
use common\models\SongOrder;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

class SongOrderController extends Controller
{
    public function actionSongOrder()
    {
        /*$dataProvider = new ActiveDataProvider([
            'query' => SongOrder::find(),
        ]);

        return $this->render('songOrder', [
            'dataProvider' => $dataProvider,
        ]);*/
    }

    public function actionIndex()
    {
        $dataProviderCheck = new ActiveDataProvider([
            'query' => SongOrder::find()->where(['check' => 1]),
        ]);

        $dataProviderNotCheck = new ActiveDataProvider([
            'query' => SongOrder::find()->where(['check' => 0]),
        ]);

        return $this->render('index', [
            'dataProviderCheck' => $dataProviderCheck,'dataProviderNotCheck' => $dataProviderNotCheck
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->check=1;
        $model->save();
        return $this->redirect(['index']);
    }

    public function actionCreate()
    {
        $model = new SongOrder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    protected function findModel($id)
    {
        if (($model = SongOrder::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}