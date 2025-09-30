<?php
namespace App\somme;
class somme{
    public function somme($a,$b){
        if($a >10|| $b>10){
                throw new \Exception ("Erreur:les deux nombres doivent etre superieur a 10 ");
        }
        return $a+$b;
    }
    
}