<?php
require_once "src/calc.php";
if ($argc != 3) {
    throw new \Exception("usage: php cli.php number1 number2");
    exit(1);
}
$a = (int)$argv[1];
$b = (int)$argv[2];
try {
    $sm = new \App\somme\somme();
    $res_somme = $sm->somme($a, $b);
    echo "la somme de number $a et number $b est : $res_somme";
} catch (\Exception $e) {
    echo "erreur: " . $e->getMessage();
}