<?php

namespace app\controllers;

use app\views\View;

class PageController
{

    public static function getHeader()
    {
        return View::render('header', []);
    }

    public static function getPage(string $title, string $content)
    {
        return View::render('Master', [
            'title' => $title,
            'header' => PageController::getHeader(),
            'content' => $content,
            'footer' => PageController::getFooter()
        ]);
    }

    public static function getFooter()
    {
        return View::render('footer');
    }
}
