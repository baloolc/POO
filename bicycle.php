<?php

class Bicycle

{
    
    private int $numberWheels;
    private int $currentSpeed;
    private string $color;
    

   

    

    
    public function __construct(string $color, string $numberWeels)

    {

    $this->color = $color;
    $this->numberWheels = $numberWeels;

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
    

}