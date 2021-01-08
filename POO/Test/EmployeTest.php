<?php
// Indiquez ici le chemin absolu vers votre fichier "Personnage.class.php"
 require_once "././classes/Employe.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class EmployeTest extends TestCase
{  
    public function isPropertyPrivate($instance, $propertyName){
        $reflector = new \ReflectionProperty($instance, $propertyName);
        $reflector_instance = $reflector->isPrivate();
        echo $reflector_instance;
        return $reflector_instance;
    }
    
    public $EmployeLambda;   
    public $proprietePrivee = true; 
    
    public function creerEmploye(){
        return new Employe();
    }  
    
    // Teste l'instanciation d'un objet
    public function testEmployeBase() {
        $EmployeLambda = $this->creerEmploye();
        $this->assertNotNull($EmployeLambda);
    }
    
    // Teste la visibilité du champ nom
    public function testEmployeChampNom(){
        $EmployeLambda = $this->creerEmploye();
        $private = $this->isPropertyPrivate($EmployeLambda,'_nom');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ nom à l'instanciation
    public function testEmployeChampNomDefault() {
        $EmployeLambda = $this->creerEmploye();
        $this->assertNull($EmployeLambda->getNom());
    }
    
    // Teste l'assignation du champ nom 
    public function testEmployeeValeurNom() {
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setNom("Loper");
        $this->assertEquals('Loper',$EmployeLambda->getNom());
    }
    
    // Teste la visibilité du champ prénom
    public function testEmployeChampPrenom(){
        $EmployeLambda = $this->creerEmploye();
        $private = $this->isPropertyPrivate($EmployeLambda,'_prenom');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ prenom à l'instanciation
    public function testEmployeChampPrenomDefault() {
        $EmployeLambda = $this->creerEmploye();
        $this->assertNull($EmployeLambda->getPrenom());
    }
    
    // Teste l'assignation du champ prenom
    public function testEmployeValeurPrenom() {
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setPrenom("Dave");
        $this->assertEquals('Dave',$EmployeLambda->getPrenom());
    }
    
    // Teste la visibilité du champ d_embauche
    public function testEmployeChampD_embauche(){
        $EmployeLambda = $this->creerEmploye();
        $private = $this->isPropertyPrivate($EmployeLambda,'_dateEmbauche');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ d_embauche à l'instanciation
    public function testEmployeChampD_embaucheDefault() {
        $EmployeLambda = $this->creerEmploye();
        $this->assertNull($EmployeLambda->getDateEmbauche());
    }
    
    // Teste l'assignation du champ d_embauche
    public function testEmployeValeurD_embauche() {
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setDateEmbauche("08/05/2019");
        $this->assertEquals("08/05/2019",$EmployeLambda->getDateEmbauche());
    }
    
    // Teste la visibilité du champ fonction
    public function testEmployeChampFonction(){
        $EmployeLambda = $this->creerEmploye();
        $private = $this->isPropertyPrivate($EmployeLambda,'_fonction');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ fonction à l'instanciation
    public function testEmployeChampFonctionDefault() {
        $EmployeLambda = $this->creerEmploye();
        $this->assertNull($EmployeLambda->getFonction());
    }
    
    // Teste l'assignation du champ fonction 
    public function testEmployeValeurFonction() {
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setFonction("Manager");
        $this->assertEquals('Manager',$EmployeLambda->getFonction());
    }
    
    // Teste la visibilité du champ salaire
    public function testEmployeChampSalaire(){
        $EmployeLambda = $this->creerEmploye();
        $private = $this->isPropertyPrivate($EmployeLambda,'_salaire');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ salaire à l'instanciation
    public function testEmployeChampSalaireDefault() {
        $EmployeLambda = $this->creerEmploye();
        $this->assertNull($EmployeLambda->getSalaire());
    }
    
    // Teste l'assignation du champ salaire
    public function testEmployeValeurSalaire() {
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setSalaire(1500);
        $this->assertEquals(1500,$EmployeLambda->getSalaire());
    }
    
    // Teste la visibilité du champ service
    public function testEmployeChampService(){
        $EmployeLambda = $this->creerEmploye();
        $private = $this->isPropertyPrivate($EmployeLambda,'_service');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ service à l'instanciation
    public function testEmployeChampServiceDefault() {
        $EmployeLambda = $this->creerEmploye();
        $this->assertNull($EmployeLambda->getService());
    }
    
    // Teste l'assignation du champ service
    public function testEmployeValeurService() {
        $EmployeLambda = $this->creerEmploye();;
        $EmployeLambda->setService("Décoration");
        $this->assertEquals("Décoration",$EmployeLambda->getService());
    }

    // Teste méthode ancienneté
    public function testEmployeMethodeAnciennete(){
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setDateEmbauche("08/05/2019");
        $this->assertEquals(1,$EmployeLambda->getAnciennete());
    }

    // Teste prime employé1
    public function testEmployeMethodePrimeEmploye1(){
       $EmployeLambda = $this->creerEmploye();
       $EmployeLambda->setSalaire(4000);
       $EmployeLambda->setDateEmbauche("20/09/1988");
       
       $primeemploye1 = ((5 * 4000)/100) + (32 *  ((2 * 4000)/100));

       $this->assertEquals($primeemploye1,$EmployeLambda->calculerPrime());
    }

    public function testEmployeMethodePrimeEmploye2(){
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setSalaire(2500);
        $EmployeLambda->setDateEmbauche("23/10/1995");
        
        $primeemploye1 = ((5 * 2500)/100) + (25 *  ((2 * 2500)/100));
 
        $this->assertEquals($primeemploye1,$EmployeLambda->calculerPrime());
     }


     public function testEmployeMethodePrimeEmploye3(){
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setSalaire(2000);
        $EmployeLambda->setDateEmbauche("20/10/2003");
        
        $primeemploye1 = ((5 * 2000)/100) + (17 *  ((2 * 2000)/100));
 
        $this->assertEquals($primeemploye1,$EmployeLambda->calculerPrime());
     }


     public function testEmployeMethodePrimeEmploye4(){
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setSalaire(1800);
        $EmployeLambda->setDateEmbauche("25/09/1999");
        
        $primeemploye1 = ((5 * 1800)/100) + (21 *  ((2 * 1800)/100));
 
        $this->assertEquals($primeemploye1,$EmployeLambda->calculerPrime());
     }


     public function testEmployeMethodePrimeEmploye5(){
        $EmployeLambda = $this->creerEmploye();
        $EmployeLambda->setSalaire(1700);
        $EmployeLambda->setDateEmbauche("05/03/2004");
        
        $primeemploye1 = ((5 * 1700)/100) + (16 *  ((2 * 1700)/100));
 
        $this->assertEquals($primeemploye1,$EmployeLambda->calculerPrime());
     }

}
?>