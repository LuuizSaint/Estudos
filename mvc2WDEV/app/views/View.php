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

        foreach (array_keys($params) as $key) {
            $contentView = str_replace('{{' . $key . '}}', $params[$key], $contentView);
        }

        return $contentView;
    }
}
