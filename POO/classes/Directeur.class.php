<?php

class Directeur extends Employe{

    public function calculerPrime(){
        $prime = ((7 * $this->_salaire)/100) + ($this->getAnciennete() *  ((3 * $this->_salaire)/100));
        $mois = intval(date('m'));
        $jour = intval(date('d'));
        if ($mois == 11 and $jour == 30){
           echo "L'ordre de transfert de vôtre prime de ".$prime." Euros a été envoyé à vôtre banque";
         }
        return $prime;
     }

}


?>