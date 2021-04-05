<?php
namespace Gaivoronskiy;
class Line
{
    protected $x;

    public function line_equation($a,$b)
    {
        if ($a != 0) {
            return $this->x = (-$b) / $a;
        }
        return null;

    }
}
