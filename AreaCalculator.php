<?php

namespace App\Http\Controllers;

class AreaCalculator
{
    public  function totalArea(ShapeInterface ...$shapes)
    {
//        dd($shapes);
        $area=0;
        foreach ($shapes as $shape){
            if ($shape instanceof ShapeInterface){
                $area += $shape->area();
            }else{
                throw new \Exception(get_class($shape).' is not a valid shape');
            }
        }
        return $area;
    }
}
