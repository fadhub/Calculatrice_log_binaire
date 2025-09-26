<?php
namespace App;

/**
 * Petit trait utilitaire
 */
trait ConvertTrait
{
    // Vérifie et nettoie une entrée
    public function cleanInput(mixed $value): int
    {
        if (!is_numeric($value) || intval($value) != $value) {
            throw new \InvalidArgumentException("La valeur doit être un entier valide.");
        }
        return intval($value);
    }
}
