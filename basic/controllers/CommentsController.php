<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class CommentsController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $comments = Comments::find()->all();
        return $this->render('index', [
            'comments' =>$comments,
        ]);
    }

    
}
