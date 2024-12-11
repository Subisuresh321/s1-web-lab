<?php
    $num=$_POST['num'];

    function factorial($x){
        if($x==0)
            return 1;
        else
        return $x*factorial($x-1);
    }

echo "the Factorial of $num is".factorial($num);
?>