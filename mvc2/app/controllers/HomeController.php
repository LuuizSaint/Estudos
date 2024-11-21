<?php

namespace app\controllers;

use app\views\View;
use app\models\entity\Org;

class HomeController extends PageController
{

    public static function getHome()
    {
        $objOrg = new Org;

        $content = View::render('home', [
            'userId' => $objOrg->id,
            'userName' => $objOrg->name,
            'userEmail' => $objOrg->email,
            'userSex' => $objOrg->sex,
            'userDesc' => $objOrg->desc,
            'userScore' => $objOrg->score
        ]);

        return PageController::getPage('Home', $content);
    }
}
