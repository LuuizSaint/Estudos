<?php

namespace app\views;

use Exception;

class View
{

    private static function getContentView(string $view)
    {
        $viewPath = dirname(__DIR__) . "/views/pages/{$view}.html";
        if (!file_exists($viewPath)) {
            throw new Exception("View {$view} não encontrada!");
        }

        return file_get_contents($viewPath);
    }

    public static function render(string $view, array $params = [])
    {
        $contentView = self::getContentView($view);

        $arrayKeys = array_keys($params);

        return $contentView;
    }
}
