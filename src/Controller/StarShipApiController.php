<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarShipApiController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    #[Route('api/starship')]
    public function getCollection(): Response
    {
        $starShips =[
            [
                'name' =>'Sea heaven',
                'status'=> 'Working',
                'captain' =>'Jack Sparrow',
                'code'=> '5697'
            ],
            [
                'name' =>'Titanic',
                'status'=> 'lost',
                'captain' =>'Jack Sparrow',
                'code'=> '5697'
            ],
            [
                'name' =>'Mangal Yan',
                'status'=> 'Working',
                'captain' =>'Thelma Mathew',
                'code'=> '5697'
            ]

        ];
        return $this->json($starShips);
    }
}