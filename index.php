<?php

$n = 5;

for($row=1; $row<=$n; $row++){
    
    for($col=1; $col<=$n-$row; $col++);
    echo(" ");

    for($col=1; $col<=(2*$row-1); $col++);
    echo("*");

    echo("\n");

}


?>
