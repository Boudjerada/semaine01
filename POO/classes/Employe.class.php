<?php

class Employe{
    
    protected $_nom;
    protected $_prenom;
    protected $_dateEmbauche;
    protected $_fonction;
    protected $_salaire;
    protected $_service;
    protected $_agence;
    protected $_enfants;
    
    public static $nbrEmploye = 0;

    function __construct() 
   {
    self::$nbrEmploye++;
   }


    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setNom($sNom){
         $this->_nom = $sNom;
    }
    public function setPrenom($sPrenom){
         $this->_prenom = $sPrenom;
    }
    public function setDateEmbauche($sD_embauche){
         $this->_dateEmbauche = DateTime::createFromFormat("d/m/Y",$sD_embauche);
    } 
    public function setFonction($sFonction){
        $this->_fonction = $sFonction;
    } 
    public function setSalaire($sSalaire){
         $this->_salaire = $sSalaire;
    } 
    public function setService($sService){
         $this->_service = $sService;
    }
    public function setAgence($sAgence){
         $this->_agence = $sAgence ;
    }
    public function setEnfants($sEnfants){
         $this->_enfants = $sEnfants;
    }
    
    // Accesseur : renvoie la valeur d'un attribut  
    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getDateEmbauche(){
        return $this->_dateEmbauche;
    }
    public function getFonction(){
        return $this->_fonction;
    }
    public function getSalaire(){
        return $this->_salaire;
    }
    public function getService(){
        return $this->_service;
    }
    public function getAgence(){
        return $this->_agence;
    }
    public function getEnfants(){
        return $this->_enfants;
    }


    //Méthode pour savoir combien d'année un salarié est dans l'entreprise

    public function getAnciennete(){
        setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
        $today = new DateTime();
        $embauche = $this->getDateEmbauche();
        $interval =$today->diff($embauche);
        return($interval->format('%Y'));
    }

    public function calculerPrime(){
       $prime = ((5 * $this->_salaire)/100) + ($this->getAnciennete() *  ((2 * $this->_salaire)/100));
       $mois = intval(date('m'));
       $jour = intval(date('d'));
       if ($mois == 11 and $jour == 30){
          echo "L'ordre de transfert de vôtre prime de ".$prime." Euros a été envoyé à vôtre banque";
        }
       return $prime;
    }


    public static function methodeStatique(){
        self::$nbrEmploye++;
    }

    public function isChequeVacance(){
        if ($this->getAnciennete() >= 1){
            return True;
        }
        else {
            return false;
        }
    }

}

require_once "Directeur.class.php";

?>