<?php

namespace App;

class Calculator
{
    private array $grades = [];

    public function addGradeEntry(Grade $grade): Calculator
    {
        $this->grades[$grade->getGrade()] = $grade;
        return $this;
    }

}
