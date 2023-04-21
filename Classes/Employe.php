<?php

    include ("Employe.class.php");
    include_once ("Magasins.class.php");
    include ("Magasin.php");

    // Employé 1
    $Jihyo = new Employe();
    $Jihyo
        ->setNom("Ji")
        ->setPrenom("Hyo")
        ->setDateEmbauche("12-04-2023")
        ->setPoste("Reine")
        ->setSalaire("2.560€")
        ->setService("Musique")
        ->setMagasin($Magasin1);

    // Employé 2
    $Faker = new Employe();
    $Faker->setNom("Fa");
    $Faker->setPrenom("Ker");
    $Faker->setDateEmbauche("12-01-2012");
    $Faker->setPoste("Roi");
    $Faker->setSalaire("15.503€");
    $Faker->setService("Gamer");
    $Faker->setMagasin($Magasin2);

    // Employé 3
    $Nayeon = new Employe();
    $Nayeon->setNom("Na");
    $Nayeon->setPrenom("Yeon");
    $Nayeon->setDateEmbauche("29-12-1975");
    $Nayeon->setPoste("Chant");
    $Nayeon->setSalaire("35€");
    $Nayeon->setService("Twice");

    // Employé 4
    $Tzuyu = new Employe();
    $Tzuyu->setNom("Tzu");
    $Tzuyu->setPrenom("Yu");
    $Tzuyu->setDateEmbauche("08-05-3526");
    $Tzuyu->setPoste("Danseuse");
    $Tzuyu->setSalaire("100.000€");
    $Tzuyu->setService("Twice");

    // Employé 5
    $Dahyun = new Employe();
    $Dahyun->setNom("Da");
    $Dahyun->setPrenom("Hyun");
    $Dahyun->setDateEmbauche("04-04-2003");
    $Dahyun->setPoste("Rappeuse");
    $Dahyun->setSalaire("65.135€");
    $Dahyun->setService("Twice");


    echo $Faker->Display();

    echo $Jihyo->Anciennete();

?>