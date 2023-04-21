<!-- Статические методы и свойства -->

<?php

class A
{
  public static function test($x)
  {
    return "x = {$x}";
  }
}

$user = new User("admin", "Иван");

// echo A::test(5);

class User
{
  private $role;
  private $name;

  public function __construct($role, $name)
  {
    $this->role = $role;
    $this->name = $name;
  }

  public static function createAdmin($name)
  {
    return new self("admin", $name);
  }
}

// $admin = User::createAdmin("Иван");
// var_dump($admin);

class Human
{
  private static $count = 0;

  public function __construct()
  {
    self::$count++;
  }

  public static function getCount()
  {
    return self::$count;
  }
}

$human1 = new Human();
$human2 = new Human();
$human3 = new Human();

echo "Людей уже: ". Human::getCount();
