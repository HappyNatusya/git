<?php

namespace app\controllers;

use yii\data\Pagination;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Blog;
use app\models\Tags;

class TagController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($idCat)
    {
        $blog = Blog::find()->where(['idCategory' => $idCat]);  //выводим все записи

        //пагинация
        $count = $blog->count();   //передаем кол-во записей
        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $count, 
            ]);
        $articles = $blog->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        //=======================

        return $this->render('index', [
            'blog' => $articles,
            'pagination'=> $pagination,
        ]); 
    }


    // public function actionIndex($id)
    // {
    //     $blogDet = Blog::findOne($id);
    //     return $this->render('index', [
    //         'blogDet' => $blogDet,
    //     ]);
        
    // }
    
}
