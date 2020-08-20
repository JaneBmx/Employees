<?php


namespace App\Entity;


interface Employee
{
    function doWork(string $task): void;

    function getSalary():float;
}