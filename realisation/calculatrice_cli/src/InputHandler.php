<?php
declare(strict_types=1);

namespace App;

class InputHandler {
    /**
     * Valide les entrées passées en CLI
     * @param array $args
     * @return array [int $a, int $b]
     */
    public function validate(array $args): array {
        if (count($args) < 3) {
            throw new \InvalidArgumentException("Usage: php bin/calc.php <A> <B>");
        }

        $aRaw = $args[1];
        $bRaw = $args[2];

        if (!ctype_digit($aRaw) || !ctype_digit($bRaw)) {
            throw new \InvalidArgumentException("Les deux arguments doivent être des entiers positifs !");
        }

        return [(int)$aRaw, (int)$bRaw];
    }
}
