<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckController extends AbstractController
{
    /**
     * @Route("/check-sysadm", name="app_check")
     */
    public function index(): Response
    {
        return new Response('OK');
    }
}
