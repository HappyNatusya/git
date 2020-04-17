<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Blog;

class BlogDetailsController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($id)
    {
        $blogDet = Blog::findOne($id);
        if (empty($blogDet))
        throw new \yii\web\HttpException(404, 'Такой статьи не существует');


        // $blogDet = Blog::findOne($id);
        return $this->render('index', [
            'blogDet' => $blogDet,
        ]);
        
    }

    
}
