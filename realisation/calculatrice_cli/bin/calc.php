#!/usr/bin/env php
<?php
declare(strict_types=1);

// Autoload des classes via Composer
require __DIR__ . '/../vendor/autoload.php';

use App\Cli;

try {
    $cli = new CLI();
    $cli->run($argv);
} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . PHP_EOL);
    exit(1);
}
