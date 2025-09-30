<?php
namespace App\Calculatrice;
trait ConvertTrait
{
    // Nettoyer une valeur 
    public function cleanInput(mixed $value): int
    {
        // verifier que c'est entier
        if (!is_numeric($value) || intval($value) != $value) {
            throw new \InvalidArgumentException("La valeur doit être un entier valide.");
        }
        return intval($value);
    }
}
