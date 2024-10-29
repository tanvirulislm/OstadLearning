<?php 
class Car{
    public function doSomething(){
        $this->start();
        $this->honk();
    }

    public function start(){
        echo "Car has started.\n";
    }

    private function honk(){
        echo "Honk! Honk!\n";
    }
}

$fortuner = new Car();
$fortuner->doSomething();

