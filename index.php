<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$a=15;
if($a<=16){
echo " yes";
}
else if($a==16){
    echo "same";
}
else{
    echo "no";
}


function num($num){
    for($i=1; $i<=$num;$i++){
        echo $i . "<br>";
    }
}
num(30);*/

function even($num){
    for($i=1; $i<=$num;$i++){
        if($i%2==0){
            echo $i . "<br>" ;
        }
        
    }
}
even(30);*/

function odd($num){
    for($i=1; $i<=$num;$i++){
        if($i%2==1){
            echo $i . "<br>" ;
        }
        
    }
}
odd(30);*/

function num($num){
    $a=1;
    while($a <=$num){
        {
            echo $a . "<br>";
        }
        $a++;
    }
}
num(40);*/

function even($num){
    $a=1;
    while($a <=$num){
        if($a%2==0){
            echo  "even number is " . $a . "<br>" ;
        }
        $a++;
    }
}
even(40);*/

function odd($num){
    $a=1;
    while($a <=$num){
        if($a%2==1){
            echo  "0dd number is " . $a . "<br>" ;
        }
        $a++;
    }
}
odd(40);*?

array index//
$namearray=['rose','beliful','water lily'];
print_r($namearray);
echo "<br>";
echo $namearray[2];

//associated//
$namearray=['anu'=>20,'nargis'=>21,'chanda'=>22,'taslima'=>23];
echo $namearray['chanda'];

foreach($namearray as $key=>$array){
echo $array . "<br>";
echo $key . "<br>";
}



//loop//
for($i=1;$i <=10;$i++){
    echo " $i Hello World " . "<br>";
}

for($i=2;$i <=10;$i+=2){
   echo $i . "<br>";
}

$a=1;
while($a <=10){
   // echo "$a" . "<br>";
   if($a%2==0){
    echo "$a" . "<br>";
   }
    $a++;
}
$a=1;
do {
    echo "$a" . "<br>";
        $a++;
    } while ($a <= 10);*/

    //ternary oporator//
    $result=70;
echo($result>=80)? "you have got A+": "something";


//condition

$result=30;
if($result>=75){
    if($result>80){
        echo "your super result";
    }
}
else if($result>=70 && $result>=60){
    echo "you have gotA-";
}
else if($result>=60 && $result >=50){
    echo "you have got B";
}
else if($result>=40 && $result >=30){
    echo "you have got D";
}

else if($result>=30&& $result >=10){
    echo "you have got F";
}

else{
    if($result>=49){
        echo "you have got C" . "<br>" ."Please study more";
    }

}

//variable

$a=3;
var_dump ($a);
echo "<br>";

$a=5.6777;
var_dump($a);
echo "<br>";

$num='anu';
var_dump($num);
echo "<br>";

$a=true;
var_dump($a);
echo "<br>";


$x=90;
$y=80;
$z=90;
echo $x+$y+$z . "<br>";

$y=100;
$z=90;
echo $y-$z . "<br>";

$x=60;
$y=60;
echo $x*$y . "<br>";

$y=67;
$z=8;
echo $y%$z . "<br>";

$x=80;
$y=7;
var_dump($x/$y);



//functin//
function even($num){
    for($i=1;$i <=$num;$i++){
        if($i%2==0){
            echo "even number is" .$i . "<br>";
        }
        
    }
}
even(10);

function odd($num){
    for($i=1;$i <=$num;$i++){
        if($i%2==1){
            echo "odd number is" . $i . "<br>";
        }
    }
}
odd(10);*/

function even($num){
    $a=1;
    while($a <=$num){
        if($a%2==0){
            echo "even number is" .$a . "<br>";
        }
        $a++;
    }
}
even(10);

function odd($num){
    $a=1;
    while($a <=$num){
        if($a%2==1){
            echo "odd number is" . $a . "<br>";
        }
        $a++;
    }
}
odd(10);*/


function sum($a,$b,$c){
    echo $a+$b+$c . "<br>";
}
sum(10,10,60);

function sub($a,$b){
    echo $a-$b . "<br>";
}
sub(60,35);

function multi($a,$b,$c){
    echo $a*$b*$c . "<br>";
}
multi(34,65,7);

function mod($a,$b){
    echo $a%$b . "<br>";
}
mod(64,5);

function div($a,$b){
    echo $a/$b . "<br>";
}
div(32,2);*/



function even($num){
    for($i=1;$i <=$num;$i++){
        if($i%2==0){
            echo "even number is" .$i . "<br>";
        }
        
    }
}
even(10);*/

function odd($num){
    for($i=1;$i<=$num;$i++){
        if($i%2==1){
            echo "odd number is" . $i . "<br>";
        }
    }
}
odd(10);*/

function even($num){
    $a=1;
    while($a <=$num){
        if($a%2==0){
            echo "even number is" . $a . "<br>";
        }
        $a++;
    }
}
even(10);*/

function odd($num){
    $a=1;
    while($a <=$num){
        if($a%2==1){
            echo "odd number is" .$a . "<br>";
        }
        $a++;
    }
}
odd(10);*/
$a=1;
do{
   echo $a . "<br>";
   $a++;
}while($a<=15);

function sum($a,$b){
    echo $a+$b . "<br>";
}
sum(22,22);

function sub($a,$b){
    echo $a-$b . "<br>";
}
sub(55,20);

function multi($a,$b,$c){
    echo $a*$b . "<br>";
}
multi(34,90,6);

function mod($a,$b){
    echo $a%$b . "<br>";
}
mod(82,2);

function divi($a,$b){
    echo $a/$b . "<br>";
}
divi(82,2);*/

    ?>


</body>
</html>