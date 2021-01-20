<?php
$name = "mohiz";
$mark= 50;
$rel= " ";
switch($name){
    case 'Aditi' :
    case 'Tabira' :
    case 'Farah' :
    case 'Tabassum' :
        $rel = 'apu';
        break;
                
    default :
         $rel ="vaiya";
         break;
    }

    if($mark>=33 && $mark<=100){
        echo "$name $rel Apni pass korchen";
    }
        else{
            echo "$name $rel Apni fail korchen";
     }
    
    
    