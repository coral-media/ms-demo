<?php

namespace Demo\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'demo_default_index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new demo controller!',
            'path' => 'apps/demo/src/Controller/DefaultController.php',
        ]);
    }
}
