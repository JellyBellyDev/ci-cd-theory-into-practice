<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="app_hello")
     */
    public function index(string $name): JsonResponse
    {
        return $this->json(['message' => 'Hello ' . $name], JsonResponse::HTTP_OK);
    }
}
