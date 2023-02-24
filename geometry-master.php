<?php
abstract class AbstractGeometry {
    abstract public function area();
    abstract public function perimeter();
}

class Rectangle extends AbstractGeometry {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends AbstractGeometry {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return $this->side * $this->side;
    }

    public function perimeter() {
        return 4 * $this->side;
    }
}

class Triangle extends AbstractGeometry {
    private $base;
    private $rightSide;
    private $leftSide;

    public function __construct($base, $rightSide, $leftSide) {
        $this->base = $base;
        $this->rightSide = $rightSide;
        $this->leftSide = $leftSide;
    }

    public function area() {
        // Heron's Formula
        $s = ($this->base + $this->rightSide + $this->leftSide) / 2;
        return sqrt($s * ($s - $this->base) * ($s - $this->rightSide) * ($s - $this->leftSide));
    }

    public function perimeter() {
        return $this->base + $this->rightSide + $this->leftSide;
    }
}

$rectangle = new Rectangle(5, 10);
echo 'Area of rectangle: ' . $rectangle->area() . PHP_EOL;
echo 'Perimeter of rectangle: ' . $rectangle->perimeter() . PHP_EOL;

$square = new Square(5);
echo 'Area of square: ' . $square->area() . PHP_EOL;
echo 'Perimeter of square: ' . $square->perimeter() . PHP_EOL;

$triangle = new Triangle(3, 4, 5);
echo 'Area of triangle: ' . $triangle->area() . PHP_EOL;
echo 'Perimeter of triangle: ' . $triangle->perimeter() . PHP_EOL;
?>