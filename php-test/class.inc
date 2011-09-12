<?php
class test
{
    var $aaa;

    function getA()
    {
        return $this->$aaa;
    }
    function setA($b)
    {
        $this->$aaa = $b;
    }
}
?>
