<?php
declare(strict_types=1);

namespace App;

class Converter {
    /**
     * Convertit un entier en binaire
     */
    public function toBinary(int $n): string {
        if ($n >= 0) {
            return decbin($n);
        }
        // Négatif : afficher dernier octet avec "..."
        return "..." . substr(decbin($n & 0xFF), -8);
    }

    /**
     * Convertit un entier en hexadécimal
     */
    public function toHex(int $n): string {
        return strtoupper(dechex($n));
    }
}
