<?php
//First is for adding
$a=[

    [9,8,7],
    [6,5,4],
    [3,2,1],


];

$b=[

    [7,6,5],
    [5,3,4],
    [9,2,1],


];

    for($i=0;$i<count($a);$i++){
        for($j=0;$j<count($a[$i]);$j++){
            $answer[$i][$j]=$a[$i][$j]+$b[$i][$j];
        }
    }

    for($i=0;$i<count($answer);$i++){
        for($j=0;$j<count($answer[$i]);$j++){
            echo $answer[$i][$j]. ' &nbsp;&nbsp;&nbsp';
                
            
        }
        echo '<br>';
    }

    for($i=0;$i<count($a);$i++){
        for($j=0;$j<count($a[$i]);$j++){
            output[$i][$j]=$a[$i][$j]+$b[count($a)-1-$i][count($a[$i])-1-$j];
        }
    }


    for($i=0;$i<count($a);$i++){
        for($j=0;$j<count($a[$i]);$j++){
            $a[$i][$j]
        }
    }

        


?>