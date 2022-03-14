<?php

$monTableau = ["Kaita","Veronique","Lita"] ;

function dernierElementTableau($monTableau){

    if (count($monTableau) == 2) {

        return null ;

    }else{

        $monDernierIndex = count($monTableau)-1 ;

        return $monTableau[$monDernierIndex] ;
    }

}

    echo dernierElementTableau($monTableau) ;

?>