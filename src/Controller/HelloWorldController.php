<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HelloWorldController extends AbstractController
{
    #[Route('/hello', name: 'app_hello', methods: ['GET'])]
    public function __invoke(): Response
    {
        return new Response('Hello World');
        // Oder JSON:
        // return $this->json(['message' => 'Hello World']);
    }
}
