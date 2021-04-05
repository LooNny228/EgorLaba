<?php
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
class Quadratic extends Line implements EI
{
    public function quadratic_equation($a, $b, $c)
    {
        return ($b * $b) - 4 * $a * $c;
    }

    public function solve($a, $b, $c)
    {
        If ($a === 0) {
            return parent::line_equation($b, $c);
        }
        $d = $this->quadratic_equation($a, $b, $c);
        if ($d > 0) {
            $eg = sqrt($d);
            return $this->x = array((-$b - $eg) / (2 * $a), (-$b + $eg) / (2 * $a));
        }
        if ($d === 0) {
            return $this->x = array(-$b / (2 * $a));
        }
        return null;
    }
}
?>