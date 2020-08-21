<?php


namespace App\Entity\employees\impl;

use App\Entity\employees\Employee;
use App\Entity\employees\AbstractEmployee;

class FrontendDeveloper extends AbstractEmployee implements Employee
{
    public function doWork(string $task = 'watching memes'): void
    {
        echo 'Creating frontend... Doing task: ' . $task;
    }

    public function __toString(): string
    {
        return 'Frontend Developer. ' . parent::__toString();
    }
}