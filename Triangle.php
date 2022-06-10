<?php

namespace App\Http\Controllers;

class Triangle implements ShapeInterface
{
    public $base;
    public $height;
    public function __construct( int $base,int $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function area()
    {
        return ($this->base * $this->height) / 2;
    }
}
