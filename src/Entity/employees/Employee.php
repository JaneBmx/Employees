<?php

namespace App\Entity\employees;


interface Employee
{
    public function doWork(string $task): void;

    public function getSalary():float;
}