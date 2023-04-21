<!-- Наследование -->

<?php

class Post
{
  protected $title;
  protected $text;

  public function __construct($title, $text)
  {
    $this->title = $title;
    $this->text = $text;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getText()
  {
    return $this->text;
  }

  public function setText($text)
  {
    $this->text = $text;
  }
}


class Lesson extends Post
{
  private $homework;

  public function __construct($title, $text, $homework)
  {
    parent::__construct($title, $text);
    $this->homework = $homework;
  }

  public function getHomework()
  {
    return $this->homework;
  }

  public function setHomework($homework)
  {
    $this->homework = $homework;
  }
}

class PaidLesson extends Lesson
{
  private $price;

  public function __construct($title, $text, $homework, $price)
  {
    parent::__construct($title, $text, $homework);
    $this->price = $price;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }
}

$paidlesson = new PaidLesson("Урок о наследовании PHP", "лол кек", "ложитесь спать", 100);

var_dump($paidlesson);

// $lesson = new Lesson("Заголовок", "Текст", "Домашка");

// echo "Название урока: {$lesson->getTitle()}";
// var_dump($lesson);
