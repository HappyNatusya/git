<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class BlogDetailsController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    // $id
    public function actionIndex()
    {
        // return $this->render('index',[
        //     'article'=>$article,
        // ]);
        return $this->render('index');
    }

    
}
