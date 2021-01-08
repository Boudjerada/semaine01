<?php

require_once "Agence.class.php";
require_once "Employe.class.php";




$agence1 = new Agence();
$agence2 = new Agence();
$agence3 = new Agence();
$agence4 = new Agence();

$agence1->setNom("AFPA");
$agence1->setAdresse("150 rue de poulainville");
$agence1->setCodePostal("80000");
$agence1->setVille("Amiens");
$agence1->setModeRestauration(true);

$agence2->setNom("Ametis");
$agence2->setAdresse("15 rue Jules Barni");
$agence2->setCodePostal("80000");
$agence2->setVille("Amiens");
$agence2->setModeRestauration(false);

$agence3->setNom("Dunlop");
$agence3->setAdresse("10 avenue de la Victoire");
$agence3->setCodePostal("75000");
$agence3->setVille("Paris");
$agence3->setModeRestauration(true);

$agence4->setNom("Groupama");
$agence4->setAdresse("23 rue de la Garde");
$agence4->setCodePostal("34000");
$agence4->setVille("Montpellier");
$agence4->setModeRestauration(false);



$employe1 = new Employe();
$employe2 = new Employe();
$employe3 = new Employe();
$employe4 = new Employe();
$employe5 = new Employe();


$employe1->setNom("Dupont");
$employe1->setPrenom("Jean");
$employe1->setDateEmbauche("20/09/1988");
$employe1->setFonction("Directeur des ressouces humaines");
$employe1->setSalaire(4000);
$employe1->setService("Direction");
$employe1->setAgence($agence1);
$employe1->setEnfants(array (2,1,0));

$employe2->setNom("Lefevre");
$employe2->setPrenom("Alain");
$employe2->setDateEmbauche("23/10/1995");
$employe2->setFonction("Manager");
$employe2->setSalaire(2500);
$employe2->setService("Commercial");
$employe2->setAgence($agence2);
$employe2->setEnfants(array (0,1,2));

$employe3->setNom("Jeanjean");
$employe3->setPrenom("David");
$employe3->setDateEmbauche("20/10/2003");
$employe3->setFonction("Chef de rayon");
$employe3->setSalaire(2000);
$employe3->setService("Vente");
$employe3->setAgence($agence3);
$employe3->setEnfants(array (2,2,0));


$employe4->setNom("Citerne");
$employe4->setPrenom("Joel");
$employe4->setDateEmbauche("25/09/1999");
$employe4->setFonction("Vendeur");
$employe4->setSalaire(1800);
$employe4->setService("Vente");
$employe4->setAgence($agence4);
$employe4->setEnfants(array (1,1,1));


$employe5->setNom("Chirac");
$employe5->setPrenom("Nicolas");
$employe5->setDateEmbauche("05/03/2004");
$employe5->setFonction("Vendeur");
$employe5->setSalaire(1700);
$employe5->setService("Vente");
$employe5->setAgence($agence1);
$employe5->setEnfants(array (0,0,0));

echo "<h3><b>Question 3</b></h3>"."<br>";



//Création liste des 5 employés
$tab = [$employe1,$employe2,$employe3,$employe4,$employe5];

//Affichage prime des 5 employés
echo "<b>Liste des employés</b>"."<br><br>";
$i=1;
foreach($tab as $empl){
    echo "<b>Employé ".$i." : </b>"."<br>";
    echo "PRIME : ".$empl->calculerPrime()." Euros"."<br><br>";
    $i = $i +1;
}

echo "<h3><b>Question 4</b></h3>"."<br>";

//Affichage Nombre d'employés

echo "<b>Le nombre d'employés est : </b>".count($tab)."<br><br>";

//Affichage information des employés par ordre alphabétique Nom Prenom
//tri par nom et prenom
function tri1($tab){
for($i=0; $i<count($tab) - 1; $i = $i + 1){
    $position = $i;
    for($j=$i+1; $j<count($tab); $j = $j + 1){
        if($tab[$j]->getNom() < $tab[$position]->getNom() ){
            $position = $j;
        }
        if($tab[$j]->getNom() == $tab[$position]->getNom() ){
            if ($tab[$j]->getPrenom() < $tab[$position]->getPrenom()){
                $position = $j;
            }
        }
    }
    $tanpon=$tab[$position];
    $tab[$position]=$tab[$i];
    $tab[$i]=$tanpon;
}
return $tab;
}

$tab2 = tri1($tab);

echo "<b>Liste des employés par ordre alphabétique NOM PRENOM</b>"."<br><br>";
foreach($tab2 as $empl){
    echo "NOM : ".$empl->getNom()."<br>";
    echo "PRENOM : ".$empl->getPrenom()."<br>";
    echo "DATE EMBAUCHE : ".$empl->getDateEmbauche()."<br>";
    echo "FONCTION : ".$empl->getFonction()."<br>";
    echo "SALAIRE : ".$empl->getSalaire()."<br>";
    echo "SERVICE : ".$empl->getService()."<br>";
    echo "PRIME : ".$empl->calculerPrime()." Euros"."<br>";
    echo "<br>";
}

//tri par service, nom et prenom

function tri2($tab){
    for($i=0; $i<count($tab) - 1; $i = $i + 1){
        $position = $i;
        for($j=$i+1; $j<count($tab); $j = $j + 1){
            if($tab[$j]->getService() < $tab[$position]->getService() ){
                $position = $j;
            }
            if($tab[$j]->getService() == $tab[$position]->getService() ){
                if ($tab[$j]->getNom() < $tab[$position]->getNom()){
                    $position = $j;
                }
                if($tab[$j]->getNom() == $tab[$position]->getNom()){
                    if ($tab[$j]->getPrenom() < $tab[$position]->getPrenom()){
                        $position = $j;
                    }
                }

            }
        }
        $tanpon=$tab[$position];
        $tab[$position]=$tab[$i];
        $tab[$i]=$tanpon;
    }
    return $tab;
}

$tab2 = tri2($tab);
echo "<b>Liste des employés par ordre alphabétique SERVICE NOM PRENOM</b>"."<br><br>";
foreach($tab2 as $empl){
    echo "SERVICE : ".$empl->getService()."<br>";
    echo "NOM : ".$empl->getNom()."<br>";
    echo "PRENOM : ".$empl->getPrenom()."<br>";
    echo "DATE EMBAUCHE : ".$empl->getDateEmbauche()."<br>";
    echo "FONCTION : ".$empl->getFonction()."<br>";
    echo "SALAIRE : ".$empl->getSalaire()."<br>";
    echo "PRIME : ".$empl->calculerPrime()." Euros"."<br>";
    echo "<br>";
}


echo "<b>Masse salarial de l'emtreprise : </b>"."<br>";

$massesal = 0;
foreach($tab as $empl){
    $massesal = $massesal + $empl->calculerPrime() + ($empl->getSalaire() * 12);
}

echo "La Masse salarial de l'entreprise issue du salaire et de la prime de chaque employé est de : ".$massesal." Euros"."<br><br>";

echo "<h3><b>Question 5 : Mode de Restauratiion de chaque employé</b></h3>"."<br>";

//Affichage mode de restauration des 5 employés
$i=1;
foreach($tab as $empl){
    echo "<b>Employé ".$i." : ".$empl->getNom()." ".$empl->getPrenom()."</b>"."<br>";
    if ($empl->getAgence()->getModeRestauration() == true){
        echo "Restaurant d'Entreprise"."<br><br>";
    }
    else{
        echo "Ticket restaurant"."<br><br>";
    }
    $i = $i +1;
}

echo "<h3><b>Question 8 : Chéques Noél</b></h3>"."<br><br>";
$i=1;
foreach($tab as $empl){
    echo "<b>Employé ".$i." : ".$empl->getNom()." ".$empl->getPrenom()."</b>"."<br>";
    if ( ($empl->getEnfants()[0] == 0) and ($empl->getEnfants()[1] == 0) and ($empl->getEnfants()[2] == 0)){
        echo "Vous avez pas le droit aux chéques vacances"."<br><br>";
    }
    else{
        echo "Vous avez le droit aux chéques vacances"."<br>";
        if ($empl->getEnfants()[0] != 0) echo "Vous avez droit à ".$empl->getEnfants()[0]." chéques vacances de 20 Euros car vous avez ".$empl->getEnfants()[0]." enfants dont l'âge est compris entre 0 et 10 ans"."<br>";
        if ($empl->getEnfants()[1] != 0) echo "Vous avez droit à ".$empl->getEnfants()[1]." chéques vacances de 30 Euros car vous avez ".$empl->getEnfants()[1]." enfants dont l'âge est compris entre 11 et 15 ans"."<br>";
        if ($empl->getEnfants()[2] != 0) echo "Vous avez droit à ".$empl->getEnfants()[2]." chéques vacances de 50 Euros car vous avez ".$empl->getEnfants()[2]." enfants dont l'âge est compris entre 16 et 18 ans"."<br>";
        echo "<br>";  
    }
    $i = $i +1;
}


echo "<h3><b>Question 9 : Directeur</b></h3>"."<br><br>";
echo "Exemple d'un directeur ayant la même date d'embauche le 20 septembre 1988 et le même salaire 4000 euros que l'employé 1, calcul des primes : "."<br><br>";

$directeur1 = new Directeur();

$directeur1->setSalaire(4000);
$directeur1->setDateEmbauche("20/09/1988");


echo "<b>PRIME Employé 1: </b>".$employe1->calculerPrime()." Euros"."<br>";
echo "<b>PRIME Directeur: </b>".$directeur1->calculerPrime()." Euros"."<br>";





?>