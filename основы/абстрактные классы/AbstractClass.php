<!-- Абстрактные классы -->

<?php

abstract class AbstractClass
{
  abstract public function getValue();

  public function printValue()
  {
    echo 'Значение: ' . $this->getValue();
  }
}

class ClassA extends AbstractClass
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

$objectA = new ClassA('kek');
$objectA->printValue();
