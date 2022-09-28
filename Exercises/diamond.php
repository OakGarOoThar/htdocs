<?php
$m =1;
$n=5;
for ($row=1; $row<=5; $row++)
   {
    for ($column=$row; $column<=4; $column++)
    {
     echo "&nbsp;&nbsp;";
    } 
    for($k=1; $k<=$m; $k++)  {
        echo "*";
    }
    for($c=$m; $c>1; $c--) {
        echo "*";
    }
        echo "<br>";
        $m++;
    }

    for($i=1; $i<=5; $i++) 
    {
    for($j=$i; $j>=1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for($k=$n; $k>1; $k--) {
        echo "*";
    }
    for($c=$n-1; $c>1; $c--) {
        echo "*";
    }
        echo "<br>";
        $n--;
    }