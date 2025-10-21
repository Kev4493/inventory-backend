<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class ApiController
{
    #[Route('/health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }

    #[Route('/items', methods: ['GET'])]
    public function items(ItemRepository $repo): JsonResponse
    {
        $items = $repo->findBy([], ['id' => 'DESC']);

        $data = array_map(function ($i) {
            return [
                'id' => $i->getId(),
                'name' => $i->getName(),
                'category' => $i->getCategory(),
                'location' => $i->getLocation(),
                'person' => $i->getPerson(),
                'purchaseDate' => $i->getPurchaseDate(),
                'notes' => $i->getNotes(),
            ];
        }, $items);

        return new JsonResponse($data);
    }
}
