<?php
class CI_Base
{
    private static $instance = 1;
    public function CI_Base()
    {
    }
    public static function increase()
    {
        self::$instance += 1;
        return self::$instance;
    }
}
function getInstance()
{
    return CI_Base::increase();
}
$A = new CI_Base();
var_dump($A);
echo getInstance();
?>
