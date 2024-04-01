<?php
namespace App\Repository;
use App\Model\StarShip;
use Psr\Log\LoggerInterface;

class StarShipRepository
{
    
    public function __construct(private LoggerInterface $logger)
     {
        
    }
    public function findAll(){
        $this->logger->info("STarship find all function called");
        return  [
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
    }
}
