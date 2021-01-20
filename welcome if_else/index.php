<?php
$name ="Tabira";
$mark =45 ;
$rel = " ";
if($name=="Tabira" || $name=="Aditi" || $name =="Suraiya" || $name=="Tabssum"){
    $rel = "apu";
}
else{
    $rel ="vaiya";
}
if($mark>=33 && $mark<=100){
    echo $name  . " $rel Apni pass korchen";
}
else{
    echo $name . " $rel Apni fail korchen";
}