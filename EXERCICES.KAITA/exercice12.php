<?php

function plusPetit($nombre1,$nombre2,$nombre3){

    $trouverPlusPetit = $nombre1 ; 

    if ($nombre1>$nombre2){

        $trouverPlusPetit=$nombre2 ; 


    } 


    if  ($trouverPlusPetit>$nombre3){

        $trouverPlusPetit = $nombre3 ;
    }

        return $trouverPlusPetit ;

}

    echo plusPetit(200,300,400) ; 
?>