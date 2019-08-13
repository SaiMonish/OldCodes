<!DOCTYPE html>

<html>
<body>
<h1>My first heading </h1>

<?php
print_r("My first PHP script!");
$num1=75;
$num2=25;

function addition(): int { 

    $GLOBALS['z'] = $GLOBALS['num1'] + $GLOBALS['num2'];
        
}

addition();
echo $z;

$number=10000;
number_format($number,0,'.',' ');
print_r($number);
$monish=0;
for(   ; $monish<10;$monish++){
    print_r($monish);
    $monish=$monish+1;

}
echo "This is break point <br>";
//you could do return in function then echo outside to display it
//or you can do echo in the method then simply call it to display it
function myFunction($x,$y) : int {
    
 return $x+$y;
}
echo myFunction(1.222,5.67676);//even though the arguments are float numbers, you can set the return type of the method
 $moni=4;
$myarray = array("Volvo","BMW","toyota");
echo "The selected car is " . $myarray[0] . "," . $myarray[1] . "."; //in PHP, to separate between two things in a string,
//you have to put a dot instead of a + sign in Java.
echo "the length of my array is " . count($myarray) . ". ";
for( $var=0;$var<count($myarray);$var++){
    echo $myarray[$var];
    echo "<br>";
}

$age['moni']=35;
$age['divi']=30;

echo "Moni is " . $age['moni'] . " . "; //PHP associative arrays

function setHeight($minheight=50){
    echo "The height is : $minheight <br>";
}

setHeight(); //uses the default value of 50
do {

echo "this is the value of moni : $moni <br>"; //starts text on new line in HTML
$moni++;
}while($moni<8);

//foreach loop only works on arrays

$colors= array("red","green","blue");
sort($colors); //sort the array in alphabetical or numerical order 
//rsort : orders in reverse order

$newarray = array("Peter"=>"35", "Ben"=>"37","Rahul"=>"40");
asort($newarray);
//asort --> according to the value 
//ksort --> according to key
//arsort --> in descending order with key values
//krsort --> by key in descending order


for($iter=0;$iter<count($colors);$iter++){
    echo "colors in order : " . $colors[$iter];
    echo "<br>";
}

foreach ($colors as $value) { //required to have as $value for foreach loop
    echo "value <br>";
}

$favcolor="red";

switch($favcolor){

    case "red": 
        echo "your fav color is red!";
        break;

    case "blue":
        echo "your color is blue!";
        break;

    case "green":
        echo "your color is green";
        break;

    default: 
        echo "none of the colors";

}//switch function 



?> 

<!-- when you open up xampp,  in the browser search engine, type in localhost (opens up htdocs folder in xampp2 folder;
then from there you can give the file access point) 



</body>


</html>