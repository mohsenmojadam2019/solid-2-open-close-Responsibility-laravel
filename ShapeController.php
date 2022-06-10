<?php

namespace App\Http\Controllers;

class ShapeController
{
    public function total()
    {
            $shapes = [
                new Triangle(3, 4),
                new Circle(10),
            ];
            return (new AreaCalculator)->totalArea(...$shapes);
    }

}
