<?php
class Agence{
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_modeRestauration;


    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setNom($sNom){
        return $this->_nom = $sNom;
    }
    public function setAdresse($sAdresse){
        return $this->_adresse = $sAdresse;
    }
    public function setCodePostal($sCodePostal){
        return $this->_codePostal = $sCodePostal;
    } 
    public function setVille($sVille){
        return $this->_ville = $sVille;
    }
    public function setModeRestauration($sModeRestauration){
        return $this->_modeRestauration = $sModeRestauration;
    }
    
    // Accesseur : renvoie la valeur d'un attribut  
    public function getNom(){
        return $this->_nom ;
    }
    public function getAdresse(){
        return $this->_adresse;
    }
    public function getCodePostal(){
        return $this->_codePostal;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function getModeRestauration(){
        return $this->_modeRestauration;
    }

}


?>