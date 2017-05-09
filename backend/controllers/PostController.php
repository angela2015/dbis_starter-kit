<?php

namespace backend\controllers;

use Yii;
use common\models\Post;
use backend\models\search\PostSearch;
use \common\models\PostCategory;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class PostController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'categories' => PostCategory::find()->all(),
            ]);
        }
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $wechat = Yii::$app->wechat;
        $list1 = $wechat->listUser('1');
        $list2 = $wechat->listDepartment();
        $useridlist = array();
        $usernamelist = array();
        $department = array();
        foreach ($list1['userlist'] as $num => $item)
        {
            array_push($useridlist,$item['userid']);
            array_push($usernamelist,$item['name']);
/*            $useridlist = array_merge(array($item['userid'],$item['name']),$useridlist);
            $useridlist = array_merge(array($item['userid'],$item['name']),$useridlist);*/
        }
        foreach ($list2['department'] as $num =>$item)
        {
            $department = array_merge(array($item['id'],$item['name']),$department);
        }
        $model = new Post();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'categories' => PostCategory::find()->all(),
                'userlist' => $usernamelist,
                'departmentlist'=> $department
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionWechat()
    {
        $wechat = Yii::$app->wechat;
        $data=array(
            'touser'=>'@all',
            'toparty' =>'7',
            'totag'=>'@all',
            'agentid'=>'38',
			'msgtype'=>'text',
            'text'=>array('content'=>'Test for send message'),
			'safe'=>0
		);
        var_dump($wechat->listUser('1'));
//        return $this->render('wechat');
    }

}
