<?php

namespace Ivanov;

class Line
{
    protected $x;

    public function line($a, $b)
    {
        if ($a != 0) {
            return $this->x = array(-$b / $a);
        }
    }
}
