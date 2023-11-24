<?php

namespace App\Controller;

use App\Service\Permutations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class ApiController extends AbstractController
{
    #[Route('/permutations/{str}', name: 'permutations')]
    public function permutations(string $str): JsonResponse
    {
        $combinations = Permutations::getPermutations($str);

        return $this->json([
            'variants' => $combinations,
            'count' => count($combinations),
        ]);
    }
}
