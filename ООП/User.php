<?php

class User
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

class Article
{
  private $title;
  private $text;
  private $author;

  public function __construct($title, $text, User $author)
  {
    $this->title = $title;
    $this->text = $text;
    $this->author = $author;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getText()
  {
    return $this->text;
  }

  public function getAuthor(): User
  {
    return $this->author;
  }
}

$author = new User("Иван");
$article = new Article("Заголовок", "текст", $author);

var_dump($article);
echo "Имя автора: {$article->getAuthor()->getName()}";
