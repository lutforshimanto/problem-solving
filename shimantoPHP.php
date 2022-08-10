<?php
//Question No 1:
echo "A straincase of N length".":"."<br>";
staircase(8);

function staircase($n) {
    if( 0 < $n && $n > 20 ) {

    } else {
        for($i = 1; $i <= $n; $i++) {
             $si = 1;
            while( $si <= ($n - $i)){
                print(" ");
                $si++;
            }
            for($j = 1; $j <= $i; $j++) {
                print("#");
            }
            print("<br>");
        }
    }
}

echo"<br>";
//Question No 2:
echo"Assuming a=5 and b=10."."<br>";
$a = 5;
$b = 10;
//Question No 3:
list($a, $b) = array($b, $a);
echo"Exchanging the value of a and b:"."<br>";
echo"a=".$a."<br>";
echo"b=".$b;
?>