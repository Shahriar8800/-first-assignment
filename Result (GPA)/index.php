<?php
$mark = 9;
$name = 'SHAHRIAR';
if($mark<=100 && $mark>=80){

    echo "$name YOU GOT A+";

}
else if($mark<80 && $mark>=70){
   
    echo "$name YOU GOT A";

}
else if($mark<70 && $mark>=60){
   
    echo "$name YOU GOT A-";

}
else if($mark<60 && $mark>=50){
   
    echo "$name YOU GOT B";

}
else if($mark<50 && $mark>=40){
   
    echo "$name YOU GOT C";

}
else if($mark<40 && $mark>=33){
   
    echo "$name YOU GOT D";

}
else{

    echo "YOU'RE FAIL";
}







?>