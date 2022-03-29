<?php

class Car

{
    
    private int $numberWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energizer;
    private int $levelEnergizer;

   

    

    
    public function __construct(string $color, string $energizer, int $nbSeats)

    {

    $this->color = $color;
    $this->energizer = $energizer;
    $this->nbSieges = $nbSieges;

    }

   
    public function start(): string
    {
        if($this->currentSpeed <= 0){
            $this->currentSpeed ++;
        }
          return 'let\'s go';
    }
    


    public function forward(): string

    {
    
    $this->currentSpeed = 50;


    return "Go !";

    }


    public function brake(): string

    {

    $sentence = "";

         while ($this->currentSpeed > 0) {

       $this->currentSpeed--;

       $sentence .= "Brake !!!";

        }

        $sentence .= "I'm stopped !";

        return $sentence;

    }
    
    public function getNumberWeels(): string

    {
    
        return $this->numberWheels;
    
    }

    public function getCurrentSpeed(): int

    {

    return $this->currentSpeed;

    }

    public function setCurrentSpeed(int $currentSpeed): void

    {

    if($currentSpeed >= 0) {

        $this->currentSpeed = $currentSpeed;

    }
}

    public function getColor(): string

    {
    
        return $this->color;
    
    }
    public function getNbSeats(): string

    {
    
        return $this->nbSieges;
    
    }

    public function getEnergizer(): string

    {
    
        return $this->energizer;
    
    }

    public function getLevelEnergizer(): string

    {
    
        return $this->levelEnergizer;
    
    }
    


}