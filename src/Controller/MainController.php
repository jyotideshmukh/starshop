<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage():Response
    {
        $countOfStarship = 457;
        $myShip = [
            'name' =>'Sea heaven',
            'status'=> 'Working',
            'captain' =>'Jack Sparrow',
            'code'=> '5697'
        ];
        return
            $this->render('main/homepage.html.twig',
            [
                'numOfStarship' => $countOfStarship,
                'myShip'=>$myShip
            ]);
    }
}
