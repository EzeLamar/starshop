<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger): Response
    {
        $starsips = [
            new Starship('ship-1', 'hunter', 10),
            new Starship('ship-2', 'cargo'),
            new Starship('ship-3', 'hunter', 3),
        ];
        $logger->info('Starship collection retreived!');

        return $this->json($starsips);
    }
}
