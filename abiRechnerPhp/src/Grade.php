<?php

namespace App;

class Grade {

    private int $min;

    private int $max;

    private float $grade;

    public function __construct(int $min, int $max, float $grade)
    {
        $this->min = $min;
        $this->max = $max;
        $this->grade = $grade;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function getGrade(): float
    {
        return $this->grade;
    }

}
