<?php

namespace app\controllers;

use yii\data\Pagination;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\Blog;

class BlogController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($sort = '')
    {
        $blog = Blog::find()->orderBy($sort);  //выводим все записи

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
            'blog' =>$articles,
            'pagination'=> $pagination,
        ]);
    }
    public function actionSearch(){
		$q = trim(Yii::$app->request->get('q'));
		// $this->setMeta('PhotoLife | Search: '. $q);
		if(!$q)
			return $this->render('search');
            $blog = Blog::find()->where(['like', 'name', $q]);
            
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
            'blog' =>$articles,
            'pagination'=> $pagination,
        ]);
    }
    

    
}
