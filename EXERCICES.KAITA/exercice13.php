<?php

    $monTableau = ["Kaita","Veronique","Lita"] ;

    function premierElementTableau($monTableau){

        if (count($monTableau) == 0) {

            return null ;

        }else{

            return $monTableau[0] ;
        }
 
    }

        echo premierElementTableau($monTableau) ;
?>