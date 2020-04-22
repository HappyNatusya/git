<?php

namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Blog;
use app\models\User;

class UserController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        {
        $user = Blog::findOne()->all();
        return $this->render('index', [
            'user' => $user,
        ]);
        
    }
    
}
