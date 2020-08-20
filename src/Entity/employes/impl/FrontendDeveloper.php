<?php


namespace App\Entity\impl;


class FrontendDeveloper extends \App\Entity\AbstractEmployee implements \App\Entity\Employee
{

    function doWork(string $task = 'watching memes'): void
    {
        echo 'Creating frontend... Doing task: '.$task;
    }
}