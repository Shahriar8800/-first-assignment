<?php
echo "UPto 3 = Bronze<br>Upto 5 = Silver<br>Upto 8 = Gold<br>Upto 10 = Platinium<br>Upto 15 = Grandmaster<br><br>";
$credit =90 ;
if($credit>3 && $credit<=5){

    echo "You are a <b>Bronze</b> member";

}
elseif($credit>5 && $credit<=8){

    echo "You are a <b>Silver</b> member";

}
elseif($credit>8 && $credit<=10){

    echo "You are a <b>Gold</b> member";

}
elseif($credit>10 && $credit<=15){

    echo "You are a <b>Platinium</b> member";

}
elseif($credit>15){

    echo "You are a <b>Grandmaster</b> member";

}
else{
    echo "You are nearly to reach <b>Bronze</b> membership<br>Please try hearder";
}