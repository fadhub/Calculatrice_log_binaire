<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\Calculator;

try {
    $lines = [];

    // Si des arguments sont passés, on les utilise
    if ($argc >= 3) {
        $lines[] = ($argv[1] . ' ' . $argv[2]);
    }
    // Sinon, lire le fichier input.txt
    else {
        $lines = file(__DIR__ . '/../samples/input.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!$lines) {
            throw new InvalidArgumentException("Aucun argument fourni et input.txt vide ou introuvable.");
        }
    }

    $results = []; // Tableau pour stocker toutes les opérations

    foreach ($lines as $line) {
        // Chaque ligne doit contenir "A B"
        [$a, $b] = array_map(fn($v) => (int)($v ?? 0), explode(' ', $line) + [0,0]);

        $calc = new Calculator($a, $b);

        // Affichage dans le terminal
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
        echo str_repeat("=", 30) . PHP_EOL . PHP_EOL;

        // Ajouter au tableau JSON
        $results[] = [
            'A' => $a,
            'B' => $b,
            'operations' => [
                'AND' => $calc->and(),
                'OR' => $calc->or(),
                'XOR' => $calc->xor(),
                'NOT_A' => $calc->notA(),
                'NOT_B' => $calc->notB(),
                'A_shiftLeft' => $calc->shiftLeftA(),
                'B_shiftRight' => $calc->shiftRightB(),
            ]
        ];
    }

    // Sauvegarde dans output.json
    file_put_contents(__DIR__ . '/../samples/output.json', json_encode($results, JSON_PRETTY_PRINT));
    echo "✅ Toutes les opérations ont été sauvegardées dans samples/output.json\n";

} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . PHP_EOL);
    exit(1);
}
