<?php


namespace App\Entity\employees\impl;

use App\Entity\employees\Employee;
use App\Entity\employees\AbstractEmployee;

class Developer extends AbstractEmployee implements Employee
{
    private string $grade;

    /**
     * Developer constructor.
     * @param string $firstName
     * @param string $lastName
     * @param float $salary
     * @param string $middleName
     * @param float $rate
     * @param string $grade
     */
    public function __construct(string $firstName, string $lastName, float $salary, string $middleName, float $rate = 1, string $grade = 'Junior')
    {
        parent::__construct($firstName, $lastName, $salary, $middleName, $rate);
        $this->grade = $grade;
    }

    public function doWork(string $task = 'reading docs'): void
    {
        echo 'Programming... Doing task: ' . $task;
    }

    public function __toString(): string
    {
        return $this->grade . ' Developer. ' . parent::__toString();
    }
}