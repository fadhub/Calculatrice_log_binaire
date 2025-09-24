<?php
declare(strict_types=1);

namespace App;

class Calculator {
    // Opération ET
    public function andOp(int $a, int $b): int {
        return $a & $b;
    }

    // Opération OU
    public function orOp(int $a, int $b): int {
        return $a | $b;
    }

    // Opération XOR
    public function xorOp(int $a, int $b): int {
        return $a ^ $b;
    }

    // Opération NON
    public function notOp(int $a): int {
        return ~$a;
    }
}
