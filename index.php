<?php

class Car {
    // properties
    private string $color = "blue";
    private int $seats = 4;
    private int $passengers = 4;
    protected int $speed = 50;

    function __construct( string $color, int $seats, int $passengers, int $speed ) {
        $this->color = $color;
        $this->seats = $seats;
        $this->passengers = $passengers;
        $this->speed = $speed;
    }

    // methods
    function passagiers(string $type){
        if($this->passengers <= 0){
            $this->passengers = 0;
            echo "Er zijn geen passagiers om te verwijderen";
        }
        if($type == "add"){
            $this->passengers += 1;
        }
        else{
            $this->passengers -= 1;
        }
        echo $this->passengers;
    }

    function versnel($speed){
        $this->speed += $speed;
        echo $this->speed;
    }

    function rem($delay){
        $this->speed -= $delay;
        echo $this->speed;
    }
}

class Truck extends Car{
    private int $capacity; // We don't use this outside the class
    private int $cargo;    // We don't use this outside the class

    function __construct(int $capacity, int $cargo)
    {
        $this->capacity = $capacity;
        $this->cargo = $cargo;
    }

    function changeCargo($amount, $type){
        if($this->cargo <= 0){
            $this->cargo = 0;
            echo "cargo is al leeg";
        }
        if($type == "add"){
            $this->cargo += $amount;
        }
        else{
            $this->cargo -= $amount;
        }
        if($this->cargo > $this->capacity){
            $this->cargo = $this->capacity;
            echo "Cargo was meer dan capacity";
        }
        echo $this->cargo;
    }

    function versnel($amount){
        $this->speed += $amount / 2;
        echo $this->speed;
    }
}

$car = new Car('blue', 5, 5, 50);
$car->passagiers('add');

$truck = new Truck(20, 10);


