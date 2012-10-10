<?php
class Caller
{
    private $x = array(1, 2, 3);

    public function __call($m, $a)
    {
        print "Method $m called:\n";
        var_dump($a);
        
        $this->x = $a;
        
        return $this->x;
    }
}

$foo = new Caller();
$a = $foo->test(1, "2", 3.4, true);
var_dump($a);
?> 