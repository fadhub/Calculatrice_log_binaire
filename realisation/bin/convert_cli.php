#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Converter;

try {
    if ($argc < 2) {
        throw new InvalidArgumentException("Usage: php bin/convert_cli.php <entier>");
    }

    $input = $argv[1];
    $conv = new Converter((int)$input);
    $number = $conv->cleanInput($input);

    echo "Décimal : " . $conv->getDecimal() . PHP_EOL;
    echo "Binaire : " . $conv->getBinary() . PHP_EOL;
    echo "Hexa    : " . $conv->getHexa() . PHP_EOL;

} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . PHP_EOL);
    exit(1);
}
