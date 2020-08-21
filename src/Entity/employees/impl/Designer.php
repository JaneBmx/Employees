<?php


namespace App\Entity\employees\impl;

use App\Entity\employees\Employee;
use App\Entity\employees\AbstractEmployee;

class Designer extends AbstractEmployee implements Employee
{
    /**
     * Designer constructor.
     * @param string $task
     */

    public function doWork(string $task = 'nothing'): void
    {
        echo 'Designing... Doing task: ' . $task;
    }

    public function __toString(): string
    {
        return 'Designer. ' . parent::__toString();
        // return 'Designer. ' . $this;
    }
}