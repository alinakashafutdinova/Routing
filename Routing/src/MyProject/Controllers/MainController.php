<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\View\View;

class MainController
{
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main(): void
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

    public function sayHello(string $name): void
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }

    // ДЗ3: новый экшн — выводит «Пока, $name».
    // Роут /bye/$name добавлен в src/routes.php.
    public function sayBye(string $name): void
    {
        $this->view->renderHtml('main/bye.php', ['name' => $name]);
    }
}
