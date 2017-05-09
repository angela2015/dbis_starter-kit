<?php

namespace backend\controllers;

use common\models\UserTeacher;
use yii;

class UserTeacherController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionUpdate()
    {
        $id=Yii::$app->user->id;
        $model= new UserTeacher();
        if($this->findModel($id))
        {
            $model=$this->findModel($id);
        } else {
            $model->setScenario('create');
            $model->userid=Yii::$app->user->id;
            if ($model->save()) {
                $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
        var_dump($model->getScenario());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    protected function findModel($id)
    {
        if (($model = UserTeacher::findOne($id)) !== null) {
            return $model;
        } else {
            return false;
        }
    }

}
