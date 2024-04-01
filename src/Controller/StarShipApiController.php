<?php

namespace App\Controller;

use App\Model\StarShip;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\StarShipRepository;

class StarShipApiController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    #[Route('api/starship')]
    public function getCollection(StarShipRepository $starShipRepository ): Response
    {
        $starShips = $starShipRepository->findAll();
        return $this->json($starShips);
    }
}