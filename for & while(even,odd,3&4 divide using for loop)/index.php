
<?php
//3 & 4 divide using for loop


for($i=1;$i<=500;$i++){
   if($i % 3 == 0 && $i %4 ==0){
       echo "$i<br>";

   }

}
//even && odd number using while loop
$j=1;
$i=1;
while($i<50){
    if($j % 2==0){
        echo "$j even number <br>";
    }
    else{
        echo "$j odd number <br>";
    }
    $i++;
    $j++;

}



?>