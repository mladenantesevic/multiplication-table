<?php 

class calculator
{
    var $a;
    var $b;

    function multiplication($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->a * $this->b;
    }
}

?>
