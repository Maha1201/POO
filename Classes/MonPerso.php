<?php

    include ("Personnage.class.php");

    $p = new Personnage();
    $p->setNom("Lebowski");
    $p->setPrenom("Jeff");
    $p->setAge("18");
    $p->setSexe("homme");

    echo $p->getNom();
    echo $p->getAge();

    //$p->setNom("moi");
    echo $p->getNom();
    echo $p->getAge();

    $p2 = new Personnage();
    $p2->setNom("Lebowski");
    $p2->setPrenom("Jeff");
    $p2->setAge("18");
    $p2->setSexe("homme");

    echo $p2->getNom();
    $p->age1();
    echo $p->getAge();
    echo $p2->getAge();

    echo $p->Display();

    $mois = array("Janvier" => 31, 
    "Février" => 28, 
    "Mars" => 31, 
    "Avril" => 30, 
    "Mai" => 31, 
    "Juin" => 30, 
    "Juillet" => 31, 
    "Aout" => 30, 
    "Septembre" => 31, 
    "Octobre" => 30, 
    "Novembre" => 31, 
    "Décembre" => 30);

    echo count($mois);
?>