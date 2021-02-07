<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): JsonResponse
    {
        return $this->json(['message' => 'Are you a curious dolphin?'], JsonResponse::HTTP_OK);
    }

    /**
     * @Route("/hello/{name}", name="app_hello")
     */
    public function number(string $name): JsonResponse
    {
        return $this->json(['message' => 'Hello ' . $name], JsonResponse::HTTP_OK);
    }
}
