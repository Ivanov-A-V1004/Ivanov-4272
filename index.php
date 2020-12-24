<?php
ini_set("display_errors", 1);
error_reporting(-1);

class A
{
    protected $x;

    public function line($a, $b)
    {
        return array(($a === 0 ? Null : $this->x = -$b / $a));

    }
}

class B extends A
{

    protected function desc($a, $b, $c)
    {
        return $d = $b * $b - 4 * $a * $c;

    }

    public function line($a, $b, $c)
    {
        if ($a === 0) {
            return parent::eql($b, $c);
        }

        $d = $this->desc($a, $b, $c);

        if ($d > 0) {
            $sd = sqrt($d);
            return $this->x = array((-$b - $sd) / (2 * $a), (-$b + $sd) / (2 * $a));
        }

        if ($d === 0) {
            return $this->x = array(-$b / (2 * $a));
        }

        return null;
    }
}
