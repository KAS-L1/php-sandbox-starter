<?php

// This is a special class called Shape. It's abstract, which means you can't use it directly.
// Instead, we can create other shapes (like Circle and Rectangle) from it.
// It has a property called $name and a method to calculate the area (which will be defined in child classes).
abstract class Shape {
    protected $name; // This is the name of the shape (like "Circle" or "Rectangle").

    // This is an abstract method, which means the child classes must define this method.
    abstract public function calculateArea();

    // This is a constructor. When we create a new shape, we set its name.
    public function __construct($name) {
        $this->name = $name;
    }

    // This is a regular method. It returns the name of the shape.
    public function getName() {
        return $this->name;
    }
}

// This is a class for Circle. It is a child of Shape, so it "inherits" from Shape.
class Circle extends Shape {
    private $radius; // This is the radius of the circle.

    // This is the constructor for Circle. It sets both the name and radius of the circle.
    public function __construct($name, $radius) {
        parent::__construct($name); // This calls the parent class (Shape) constructor to set the name.
        $this->radius = $radius; // Sets the radius of the circle.
    }
    
    // This method calculates the area of the circle.
    // The formula for the area of a circle is pi * radius squared.
    public function calculateArea() {
        return pi() * pow($this->radius, 2); // pi() gives us the value of Pi, and pow() squares the radius.
    }
}

// This is a class for Rectangle. It is also a child of Shape.
class Rectangle extends Shape {
    private $height; // This is the height of the rectangle.
    private $width;  // This is the width of the rectangle.

    // This is the constructor for Rectangle. It sets the name, height, and width.
    public function __construct($name, $height, $width) {
        parent::__construct($name); // Calls the parent class (Shape) constructor to set the name.
        $this->height = $height; // Sets the height.
        $this->width = $width;   // Sets the width.
    }

    // This method calculates the area of the rectangle.
    // The formula for the area of a rectangle is width * height.
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Here we create a new circle with the name "Circle" and a radius of 15.
$circle = new Circle('Circle', 15);

// Here we create a new rectangle with the name "Rectangle", a height of 4, and a width of 6.
$rectangle = new Rectangle('Rectangle', 4, 6);

// We print out the name of the circle and its area.
echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';

// We print out the name of the rectangle and its area.
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';
