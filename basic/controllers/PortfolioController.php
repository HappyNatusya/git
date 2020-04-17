<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $portfolio = Portfolio::find()->all();
        
        return $this->render('index', [
            'portfolio' =>$portfolio,
        ]);
    }
}