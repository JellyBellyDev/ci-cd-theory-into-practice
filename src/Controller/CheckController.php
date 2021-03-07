<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckController extends AbstractController
{
    /**
     * @Route("/healthz", name="app_healthz")
     */
    public function index(): Response
    {
        //stuff to check the health of the software
        return new Response('OK');
    }
}
