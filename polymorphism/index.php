<?php

/* Polymorphism test */
require 'Figure.php';
require 'Circle.php';
require 'Rectangle.php';

$rectangle = new \polymorphism\Rectangle();
$circle = new \polymorphism\Circle();

$rectangle->drawFigure();
$circle->drawFigure();