<?php
namespace App;
interface ConvertInterface
{
    public function getDecimal(): int;
    public function getBinary(): string;
    public function getHexa(): string;
}
