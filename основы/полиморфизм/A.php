<!-- Полиморфизм -->

<?php

class A
{
  public function sayHello()
  {
    return "Hello! I am A";
  }
}

class B extends A
{
  public function sayHello()
  {
    return parent::sayHello() . '. It was joke, I am B :)';
  }
}

$a = new A();
$b = new B();

echo $b->sayHello();
