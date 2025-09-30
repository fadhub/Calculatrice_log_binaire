<?php
namespace App\Calculatrice;

/**
 * Trait qui contient des petites fonctions utilitaires
 */
trait ConvertTrait
{
    // Nettoyer une valeur (exemple pour respecter critère PHP moderne + closure)
    public function cleanInput(mixed $value): int
    {
        // On s'assure que la valeur est bien un entier
        if (!is_numeric($value) || intval($value) != $value) {
            throw new \InvalidArgumentException("La valeur doit être un entier valide.");
        }
        return intval($value);
    }
}
