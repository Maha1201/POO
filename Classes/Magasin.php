<?php

    include_once ("Magasins.class.php");

    // Magasin 1
    $Magasin1 = new Magasins();
    $Magasin1->setNomMag("Magasin1");
    $Magasin1->setAdresse("365 rue Afpa");
    $Magasin1->setCodePostal("123456");
    $Magasin1->setVille("Amiens");
    $Magasin1->setRestauration("Tickets restau");

    // Magasin 2
    $Magasin2 = new Magasins();
    $Magasin2->setNomMag("Magasin2");
    $Magasin2->setAdresse("365 rue Afpa");
    $Magasin2->setCodePostal("123456");
    $Magasin2->setVille("Amiens");
    $Magasin2->setRestauration("Cantine");

?>