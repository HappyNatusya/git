<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Portfolio;

class PortfoliodetailsController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($id)
    {
        $portfolio = Portfolio::findOne($id);
  	if (empty($portfolio))
        throw new \yii\web\HttpException(404, 'whis text nahoditsya v kontrollers');
        return $this->render('index', [
            'portfolio' => $portfolio,
        ]);
        
    }

    
}
