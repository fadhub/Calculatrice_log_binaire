#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

try {
    if ($argc < 3) {
        throw new InvalidArgumentException("Usage: php bin/calc.php <entierA> <entierB>");
    }

    $a = (int)$argv[1];
    $b = (int)$argv[2];

    $calc = new Calculator($a, $b);

    echo "Entrée A : $a (" . decbin($a) . ")" . PHP_EOL;
    echo "Entrée B : $b (" . decbin($b) . ")" . PHP_EOL;
    echo PHP_EOL . "=== Opérations binaires ===" . PHP_EOL;
    echo "A ET B   : " . $calc->and() . " (" . decbin($calc->and()) . ")" . PHP_EOL;
    echo "A OU B   : " . $calc->or() . " (" . decbin($calc->or()) . ")" . PHP_EOL;
    echo "A XOR B  : " . $calc->xor() . " (" . decbin($calc->xor()) . ")" . PHP_EOL;
    echo "NON A    : " . $calc->notA() . " (" . decbin($calc->notA()) . ")" . PHP_EOL;
    echo "NON B    : " . $calc->notB() . " (" . decbin($calc->notB()) . ")" . PHP_EOL;
    echo "A << 1   : " . $calc->shiftLeftA() . " (" . decbin($calc->shiftLeftA()) . ")" . PHP_EOL;
    echo "B >> 1   : " . $calc->shiftRightB() . " (" . decbin($calc->shiftRightB()) . ")" . PHP_EOL;

} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . PHP_EOL);
    exit(1);
}
