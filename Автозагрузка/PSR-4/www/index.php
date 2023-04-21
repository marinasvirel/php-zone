<?php

use MyProject\Models\Articles\Article as Article;
use MyProject\Models\Users\User as User;

spl_autoload_register(function (string $className) {
  require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
});

$author = new User('Иван');
$article = new Article('Заголовок', 'Текст', $author);
var_dump($article);
