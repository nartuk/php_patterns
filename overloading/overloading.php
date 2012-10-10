<?php
class Setter
{
    public $n;
    private $x = array("a" => 1, "b" => 2, "c" => 3);

    public function __get($nm)
    {
        echo "Getting [$nm]\n<br>";

        if (isset($this->x[$nm])) {
        	
            $r = $this->x[$nm];
            print "Returning: $r\n<br>";
            return $r;
        } else {
            echo "Nothing!\n<br>";
        }
    }

    public function __set($nm, $val)
    {
        echo "Setting [$nm] to $val\n\r<br>";

        if (isset($this->x[$nm])) {
        	
            $this->x[$nm] = $val;
            echo "OK!\n<br>";
            
        } else {
            echo "Not OK!\n<br>";
        }
    }

    public function __isset($nm)
    {
        echo "Checking if $nm is set\n";

        return isset($this->x[$nm]);
    }

    public function __unset($nm)
    {
        echo "Unsetting $nm\n";

        unset($this->x[$nm]);
    }
}

$foo = new Setter();
var_dump($foo);

$foo->n = 1;
$foo->a = 100;

$foo->a++;
$foo->z++;

var_dump(isset($foo->a)); //true
unset($foo->a);
var_dump(isset($foo->a)); //false

// this doesn't pass through the __isset() method
// because 'n' is a public property
var_dump(isset($foo->n));

var_dump($foo);
?>