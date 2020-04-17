<?php

namespace app\controllers;

use Yii;
use app\models\Team;
use app\models\TeamSearch;
use yii\web\Controller;


/**
 * TeamController implements the CRUD actions for Team model.
 */
class TeamController extends Controller
{
    public function actionIndex()
    {
        $team = Team::find();  //выводим все записи


        return $this->render('index', [
            'team' =>$team,
        ]);




        
    }
}
