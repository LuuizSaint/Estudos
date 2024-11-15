<?php

namespace app\controllers;

use app\views\View;

class HomeController
{

    public static function getHome()
    {
        return View::render('home', [
            'userId' => 2,
            'userName' => 'Pedrin',
            'userEmail' => 'pedrinEspacaXota@gmail.com'
        ]);
    }
}
