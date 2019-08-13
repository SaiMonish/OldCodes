<?php

function transpose(&$A, &$B) 
{ 
    $a = 4; 
    for ($i = 0; $i < $a; $i++) 
        for ($j = 0; $j < $a; $j++) 
            $B[$i][$j] = $A[$j][$i]; //switch the row and column index for B to get the transpose of A 
} 
  
// Driver code 
$A = [[1, 2, 3], 
      [4, 5, 6], 
      [7, 8, 9]
];

$a = 3; 
  
transpose($A, $B); 
  
echo "Result matrix is \n";

for ($i = 0; $i < $a; $i++) 
{ 
    for ($j = 0; $j < $a; $j++) 
    { 
        echo $B[$i][$j]; 
        echo " "; 
    } 
    echo "\n"; 
} 
 



?>