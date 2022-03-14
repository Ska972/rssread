<?php

    $tabNumber = [100,500,200,10,25,1000] ;

    function plusGrand($tabNombre){

        $x = $tabNombre [0] ;

        foreach ($tabNombre as $nombre) {
            
            if ($nombre<$x){
                
                $x = $nombre ;

            }

        }

        return $x ; 
    }

    echo plusGrand ($tabNumber) ;

?>