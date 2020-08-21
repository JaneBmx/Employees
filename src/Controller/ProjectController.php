<?php


namespace App\Controller;

use App\Service\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    private Service $service;

    /**
     * ProjectController constructor.
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("/", name="index")
     */
    public function processRequest(): Response
    {
        return $this->render('ProjectController\processRequest.html.twig', ['Project' => $this->service->create()]);
    }
}