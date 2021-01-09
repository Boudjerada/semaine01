<?php
require_once "Agence.class.php";
require_once "Employe.class.php";
?>

<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->
<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
    <title>Programation Orienté Objet</title>
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container"> <!--container global de la page-->
        <div class="d-flex justify-content-center">
            <img  src="POO.png" ></img>
        </div>
        <h6>Nous sommes dans un contexte d’une entreprise d’envergure nationale. Celle-ci souhaite se doter d’un système informatique pour gérer ses employés</h6>

<?php


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

$directeur1 = new Directeur();

$directeur1->setSalaire(4000);
$directeur1->setDateEmbauche("20/09/1988");

echo "<br><br>";

//Question 3

echo "<h3 class='d-flex justify-content-center'><b>Question 3 Affichage des primes des 5 employés</b></h3>"."<br>";

?>

<div class="table-responsive"> <!--tableau responsive-->
    <table class="table table-hover table-bordered w-100 w-sm-50"> <!--tableau avec separation des ligne et contour-->
        <thead>
            <tr class="table-active">
              <th>Employé</th>
              <th>Prime</th>
              </tr>   
        </thead>
        <tbody>
            <tr>
              <th>Employé 1</th>
              <th><?=$employe1->calculerPrime()?></th>
            </tr>
            <tr>
              <th>Employé 2</th>
              <th><?=$employe2->calculerPrime()?></th>
            </tr>
            <tr>
              <th>Employé 3</th>
              <th><?=$employe3->calculerPrime()?></th>
            </tr>
            <tr>
              <th>Employé 4</th>
              <th><?=$employe4->calculerPrime()?></th>
            </tr>
            <tr>
              <th>Employé 5</th>
              <th><?=$employe5->calculerPrime()?></th>
            </tr>
        </tbody> 
    </table>
</div>


<?php

//Question 4

echo "<h3 class='d-flex justify-content-center'><b>Question 4 Manipulation liste des employés</b></h3>"."<br>";

//Création liste des 5 employés
$tab = [$employe1,$employe2,$employe3,$employe4,$employe5];

echo "<b>Une liste des employés est crée</b>"."<br><br>";

//Affichage Nombre d'employés
echo "Le nombre d'employés est : ".count($tab)."<br><br>";

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

echo "<b>Liste des employés par ordre alphabétique NOM PRENOM par la méthode du tri sélectif de nôtre liste</b>"."<br><br>";
?>



<div class="table-responsive"> <!--tableau responsive-->
    <table class="table table-hover table-bordered w-100 w-sm-50"> <!--tableau avec separation des ligne et contour-->
        <thead>
            <tr class="table-active">
              <th>Nom</th>
              <th>Prénom</th>
              <th>Date d'embauche</th>
              <th>Fonction</th>
              <th>Salaire</th>
              <th>Service</th>
              <th>Anciénneté</th>
              <th>Prime</th>
            </tr>   
        </thead>
        <tbody>
            
<?php 

foreach(tri1($tab) as $empl){
        echo "<tr>";
            
            echo "<th>".$empl->getNom()."</th>";
            echo "<th>".$empl->getPrenom()."</td>";
            echo "<td>".$empl->getDateEmbauche()."</td>";
            echo "<td>".$empl->getFonction()."</td>";
            echo "<td>".$empl->getSalaire()." Euros"."</td>";
            echo "<td>".$empl->getService()."</td>";
            echo "<td>".$empl->getAnciennete()." Ans"."</td>";
            echo "<td>".$empl->calculerPrime()." Euros"."</td>";

        echo "</tr>";
}
?>
        </tbody> 
    </table>
</div>



<?php
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


echo "<b>Liste des employés par ordre alphabétique SERVICE NOM PRENOM par la méthode du tri sélectif de nôtre liste</b>"."<br><br>";
?>

<div class="table-responsive"> <!--tableau responsive-->
    <table class="table table-hover table-bordered w-100 w-sm-50"> <!--tableau avec separation des ligne et contour-->
        <thead>
            <tr class="table-active">
              <th>Service</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Date d'embauche</th>
              <th>Fonction</th>
              <th>Salaire</th>
              <th>Anciénneté</th>
              <th>Prime</th>
            </tr>   
        </thead>
        <tbody>
            
<?php 

foreach(tri2($tab) as $empl){
        echo "<tr>";
        
            echo "<th>".$empl->getService()."</th>";
            echo "<th>".$empl->getNom()."</th>";
            echo "<th>".$empl->getPrenom()."</td>";
            echo "<td>".$empl->getDateEmbauche()."</td>";
            echo "<td>".$empl->getFonction()."</td>";
            echo "<td>".$empl->getSalaire()." Euros"."</td>";
            echo "<td>".$empl->getAnciennete()." Ans"."</td>";
            echo "<td>".$empl->calculerPrime()." Euros"."</td>";

        echo "</tr>";
}
?>
        </tbody> 
    </table>
</div>

<?php

echo "<b>Masse salarial de l'entreprise : </b>"."<br>";

$massesal = 0;
foreach($tab as $empl){
    $massesal = $massesal + $empl->calculerPrime() + ($empl->getSalaire() * 12);
}

echo "La Masse salarial de l'entreprise issue du salaire et de la prime de chaque employé est de : ".$massesal." Euros"."<br><br>";


//Question5

echo "<h3 class='d-flex justify-content-center'><b>Question 5 Mode de Restauration de chaque employé</b></h3>"."<br>"; 

?> 

<div class="table-responsive"> <!--tableau responsive-->
    <table class="table table-hover table-bordered w-100 w-sm-50"> <!--tableau avec separation des ligne et contour-->
        <thead>
            <tr class="table-active">
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mode de restauration</th>
            </tr>   
        </thead>
        <tbody>
    
        <?php 

foreach($tab as $empl){
        echo "<tr>";
            echo "<th>".$empl->getNom()."</th>";
            echo "<th>".$empl->getPrenom()."</th>";
            ?>
            <th><?php
                if ($empl->getAgence()->getModeRestauration() == true){
                    echo "Restaurant d'Entreprise";
                }
                else{
                    echo "Ticket restaurant";
                }
                ?>
            </th>
        </tr>
<?php } ?>

        </tbody> 
    </table>
</div>




<!--Question8-->

<h3 class='d-flex justify-content-center'><b>Question 8 : Chéques Noél</b></h3>
<br>

<div class="table-responsive"> <!--tableau responsive-->
    <table class="table table-hover table-bordered w-100 w-sm-50"> <!--tableau avec separation des ligne et contour-->
        <thead>
            <tr class="table-active">
              <th>Nom</th>
              <th>Prénom</th>
              <th>Chéques Vacances</th>
              <th>Chéques Vacances de 20 euros</th>
              <th>Chéques Vacances de 30 euros</th>
              <th>Chéques Vacances de 50 euros</th>
            </tr>
        </thead>
        <body>
<?php 
    foreach($tab as $empl){
        echo "<tr>";
            echo "<th>".$empl->getNom()."</th>";
            echo "<th>".$empl->getPrenom()."</th>";?>
            <th><?php   if ( ($empl->getEnfants()[0] == 0) and ($empl->getEnfants()[1] == 0) and ($empl->getEnfants()[2] == 0)){
                            echo "Vous avez pas le droit aux chéques vacances"."<br><br>";
                        }
                        else{
                             echo "Vous avez le droit aux chéques vacances"."<br>";
                        }
                ?>
            </th>
            <th><?php   if (!( ($empl->getEnfants()[0] == 0) and ($empl->getEnfants()[1] == 0) and ($empl->getEnfants()[2] == 0))){
                            echo $empl->getEnfants()[0];
                    }?>
            </th>
            <th><?php   if (!( ($empl->getEnfants()[0] == 0) and ($empl->getEnfants()[1] == 0) and ($empl->getEnfants()[2] == 0))){
                            echo $empl->getEnfants()[1];
                    }?>
            </th>
            <th><?php   if (!( ($empl->getEnfants()[0] == 0) and ($empl->getEnfants()[1] == 0) and ($empl->getEnfants()[2] == 0))){
                            echo $empl->getEnfants()[2];
                    }?>
            </th>
            
            <?php } ?>
        </tbody> 
    </table>
</div>

                



<?php
//Question9
echo "<h3 class='d-flex justify-content-center'><b>Question 9 : Directeur</b></h3>"."<br>";
echo "Exemple d'un directeur ayant la même date d'embauche le 20 septembre 1988 et le même salaire 4000 euros que l'employé 1, calcul des primes : "."<br><br>";

$directeur1 = new Directeur();

$directeur1->setSalaire(4000);
$directeur1->setDateEmbauche("20/09/1988");

?>
<div class="table-responsive"> <!--tableau responsive-->
    <table class="table table-hover table-bordered w-100 w-sm-50"> <!--tableau avec separation des ligne et contour-->
        <thead>
            <tr class="table-active">
              <th>Personne</th>
              <th>Prime</th>
              </tr>   
        </thead>
        <tbody>

        <tr>
              <th>Employé 1</th>
              <th><?=$employe1->calculerPrime()." Euros"?></th>
            </tr>
            <tr>
              <th>Directeur</th>
              <th><?=$directeur1->calculerPrime()." Euros"?></th>
            </tr>
        </tbody> 
    </table>
</div>




    


           



    
    
    
    
    
    </div>      
</body>
</html>