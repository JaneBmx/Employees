<?php


namespace App\Entity\impl;


class Designer extends \App\Entity\AbstractEmployee implements \App\Entity\Employee
{
    /**
     * Designer constructor.
     * @param string $task
     */

    function doWork(string $task= 'nothing'): void
    {
        echo 'Designing... Doing task: '.$task;
    }
}