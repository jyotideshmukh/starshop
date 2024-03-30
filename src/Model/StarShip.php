<?php

namespace App\Model;

class StarShip
{
    public function __construct(private int $id,
    private string $name,
    private string $status,
    private string $captain,
    private string $code){

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getCaptain(): string
    {
        return $this->captain;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    
}