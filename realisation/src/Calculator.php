<?php
namespace App;


class Calculator
{
    use ConvertTrait;

    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function and(): int
    {
        return $this->a & $this->b;
    }

    public function or(): int
    {
        return $this->a | $this->b;
    }

    public function xor(): int
    {
        return $this->a ^ $this->b;
    }

    public function notA(): int
    {
        return ~$this->a;
    }

    public function notB(): int
    {
        return ~$this->b;
    }

    public function shiftLeftA(): int
    {
        return $this->a << 1;
    }

    public function shiftRightB(): int
    {
        return $this->b >> 1;
    }
}
