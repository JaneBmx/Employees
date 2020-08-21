<?php


namespace App\Entity;

use App\Entity\employees\Employee;

class Project
{
    private string $name;
    private array $employees;

    /**
     * Project constructor.
     * @param string $name
     * @param array $employees
     */
    public function __construct(string $name, array $employees = [])
    {
        $this->name = $name;
        $this->employees = $employees;
    }

    public function getTotalCost(): float
    {
        $total = 0;
        foreach ($this->employees as $employee) {
            $total += $employee->getSalary();
        }
        return $total;
    }

    public function addEmployee(Employee $employee): void
    {
        array_push($this->employees, $employee);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @param array $employees
     */
    public function setEmployees(array $employees): void
    {
        $this->employees = $employees;
    }
}