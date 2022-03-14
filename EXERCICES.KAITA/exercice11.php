<?php

    function plusGrand($argument1,$argument2){

        if ($argument1<$argument2) {

            return $argument1 ;
            
        }else{

            return $argument2 ;
        }

    }

        echo plusGrand(200,400) ;

?>