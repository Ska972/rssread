<?php

    include ("poo2.php") ;

    $infoCharly = new Famille() ;

    $infoCharly->prenom = "Charles" ; 

    echo "infoCharly->prenom : " . $infoCharly->prenom ; 

    $infoCharly->setNom("Dumbo") ;

    echo "<br>". $infoCharly->getNom() ;

?>