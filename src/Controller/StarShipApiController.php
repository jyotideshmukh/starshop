<?php

namespace App\Controller;

use App\Model\StarShip;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarShipApiController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    #[Route('api/starship')]
    public function getCollection(): Response
    {
        $starShips =[
            new StarShip(
                1,
                'Sea heaven',
                 'Working',
                'Jack Sparrow',
                 '5697'
            ),
            new StarShip(
                2,'Titanic',
                'lost',
                'Jack Sparrow',
                 '5697'
            ),
            new StarShip(
                3,'Mangal Yan',
                 'Working',
                'Thelma Mathew',
                 '5697'
            )

        ];
        return $this->json($starShips);
    }
}