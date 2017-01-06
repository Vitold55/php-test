<?php

namespace polymorphism;


abstract class Figure
{
    abstract public function draw();

    public function drawFigure() {

        echo $this->draw() . '<br />';

    }
}