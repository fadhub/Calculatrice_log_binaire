<?php
declare(strict_types=1);

namespace App;

class OutputHandler {
    public function displayResults(int $a, int $b, Calculator $calc, Converter $conv): void {
        echo "Entrée A : $a (" . $conv->toBinary($a) . ")\n";
        echo "Entrée B : $b (" . $conv->toBinary($b) . ")\n";

        echo "A ET B   : " . $calc->andOp($a, $b) . " (" . $conv->toBinary($calc->andOp($a, $b)) . ")\n";
        echo "A OU B   : " . $calc->orOp($a, $b)  . " (" . $conv->toBinary($calc->orOp($a, $b)) . ")\n";
        echo "A XOR B  : " . $calc->xorOp($a, $b) . " (" . $conv->toBinary($calc->xorOp($a, $b)) . ")\n";
        echo "NON A    : " . $calc->notOp($a)     . " (" . $conv->toBinary($calc->notOp($a)) . ")\n";
        echo "NON B    : " . $calc->notOp($b)     . " (" . $conv->toBinary($calc->notOp($b)) . ")\n";
    }
}
