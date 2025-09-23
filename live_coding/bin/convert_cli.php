<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Calculatrice\Operations;

try {
    // Vérifier qu’on a bien un argument
    if ($argc < 2) {
        throw new InvalidArgumentException("Usage: php bin/convert_cli.php <entier>");
    }

    $input = $argv[1];

    $ops = new Operations((int)$input);
    
    $number = $ops->cleanInput($input);

    // Affichage
    echo "Décimal : " . $ops->getDecimal() . PHP_EOL;
    echo "Binaire : " . $ops->getBinary() . PHP_EOL;
    echo "Hexa    : " . $ops->getHexa() . PHP_EOL;

    //logique binaire
    echo PHP_EOL . "=== Opérations binaires ===" . PHP_EOL;
    foreach ($ops->demoBinaryOps() as $k => $v) {
        echo $k . " => " . $v . PHP_EOL;
    }

} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . PHP_EOL);
    exit(1);
}
