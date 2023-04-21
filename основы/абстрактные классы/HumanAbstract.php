<!-- Абстрактные классы -->

<?php

abstract class HumanClass
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

  abstract public function getGreetings(): string;
  abstract public function getMyNameIs(): string;

  public function introduceYourself(): string
  {
    return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
  }
}

class RussianHuman extends HumanClass
{
  public function getGreetings(): string
  {
    return 'Привет';
  }
  public function getMyNameIs(): string
  {
    return 'Меня зовут';
  }
}

class EnglishHuman extends HumanClass
{
  public function getGreetings(): string
  {
    return 'Hi';
  }
  public function getMyNameIs(): string
  {
    return 'My name is';
  }
}

$russian = new RussianHuman('Иван');

$english = new EnglishHuman('John');

echo $russian->introduceYourself();
echo '<br>';
echo $english->introduceYourself();

echo '<br>';
echo '<hr>';
