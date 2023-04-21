<!-- Инкапсуляция -->

<?php

class Cat
{
  private $name;
  private $color;
  public $weight;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function sayHello()
  {
    echo "Привет! Меня зовут {$this->name}. Мой цвет {$this->color}";
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

$cat1 = new Cat("Снежок", "белый");
$cat2 = new Cat("Барсик", "рыжий");

$cat1->sayHello();
echo "<br>";
$cat2->sayHello();
