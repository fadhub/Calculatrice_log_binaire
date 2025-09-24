<?php
declare(strict_types=1);

namespace App;

class CLI {
    public function run(array $args): void {
        $inputHandler = new InputHandler();
        $converter = new Converter();
        $calculator = new Calculator();
        $outputHandler = new OutputHandler();

        // Valider les entrées
        [$a, $b] = $inputHandler->validate($args);

        // Afficher les résultats
        $outputHandler->displayResults($a, $b, $calculator, $converter);
    }
}
