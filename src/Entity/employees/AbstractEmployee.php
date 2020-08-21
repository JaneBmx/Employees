<?php


namespace App\Entity\employees;


abstract class AbstractEmployee
{
    private string $firstName;
    private string $lastName;
    private string $middleName;
    private float $salary;

    /**
     * AbstractEmployee constructor.
     * @param string $firstName
     * @param string $lastName
     * @param float $salary
     * @param string $middleName
     * @param float $rate
     */
    public function __construct(string $firstName, string $lastName, float $salary, string $middleName, float $rate = 1)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->salary = $salary * $rate;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName(string $middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return float|int
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float|int $salary
     * @param float|int $rate
     */
    public function setSalary($salary, $rate = 1): void
    {
        $this->salary = $salary * $rate;
    }

    public function __toString(): string
    {
        return $this->firstName . ', '
        . (strlen($this->getMiddleName()) == 0 ? '' : $this->getMiddleName() . ', ')
            . $this->getLastName() . '; '
            . 'Salary:' . $this->getSalary();
    }
}