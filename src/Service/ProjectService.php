<?php


namespace App\Service;

use App\Entity\employees\impl\Developer;
use App\Entity\employees\impl\Designer;
use App\Entity\employees\impl\FrontendDeveloper;
use App\Entity\Project;

class ProjectService implements Service
{
    public function create(): Project
    {
        $project = new Project("Heh");
        $project->addEmployee(new Designer("Designer", "Designerov", 3000, "Designerovich"));
        $project->addEmployee(new Developer("Vasya", "Pupkin", 65, "", 10, "Senior"));
        $project->addEmployee(new Developer("Heh", "Meh", 1000, "", 1, "Middle"));
        $project->addEmployee(new Developer("Kek", "Lol", 100, "", 1, "Middle"));
        $project->addEmployee(new FrontendDeveloper("John", "Smith", 12, "", 5));
        return $project;
    }
}