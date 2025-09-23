<?php
namespace App\Calculatrice;
class Operations implements ConvertInterface
{
    use ConvertTrait;

    private int $number; 

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getDecimal(): int
    {
        return $this->number;
    }

    public function getBinary(): string
    {
        return decbin($this->number);
    }

    public function getHexa(): string
    {
        return strtoupper(dechex($this->number));
    }
    public function demoBinaryOps(): array
    {
        $x = $this->number;
        $y = 15; 

        return [
            'AND'  => $x & $y,
            'OR'   => $x | $y,
            'XOR'  => $x ^ $y,
            //sheftleft
            '<<1'  => $x << 1,
            //sheftright
            '>>1'  => $x >> 1,
        ];
    }
}
