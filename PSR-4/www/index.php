<?php

use MyProject\Models\Articles\Article as Article;
use MyProject\Models\Users\User as User;

require __DIR__ . '/../src/MyProject/Models/Users/User.php';
require __DIR__ . '/../src/MyProject/Models/Articles/Article.php';

$author = new User('Иван');
$article = new Article('Заголовок', 'Текст', $author);
var_dump($article);