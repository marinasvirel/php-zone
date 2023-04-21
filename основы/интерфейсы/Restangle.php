<!-- Интерфейсы -->

<?php

class Rectangle implements calculateSquare
{
  private $x;
  private $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function calculateSquare(): float
  {
    return $this->x * $this->y;
  }
}

class Square implements calculateSquare
{
  private $x;

  public function __construct($x)
  {
    $this->x = $x;
  }

  public function calculateSquare(): float
  {
    return $this->x ** 2;
  }
}

class Circle implements calculateSquare
{
  const PI = 3.1416;
  private $r;

  public function __construct($r)
  {
    $this->r = $r;
  }

  public function calculateSquare(): float
  {
    return self::PI * ($this->r ** 2);
  }
}

interface calculateSquare
{
  public function calculateSquare(): float;
}

$objects = [
  new Square(5),
  new Rectangle(2, 4),
  new Circle(5)
];

foreach ($objects as $object) {
  $x = get_Class($object);
  if ($object instanceof CalculateSquare) {
    echo "Объект класса {$x} реализует интерфейс CalculateSquare. Площадь: {$object->calculateSquare()}";
    echo '<br>';
  }
}
