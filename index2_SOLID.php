
<?php
interface VehicleInterface {
    public function goAheadOrBack();
    public function specialPossibilites();
    public function honk();
    public function turnOnWipers();
}

class Car implements VehicleInterface
{
    public $maxVelocity = 250;
    public $color = 'red';
    public $signal = 'Bip-bip';
    public function goAheadOrBack() {}

    public function specialPossibilites()
    {
        function driveFast() {
            //...
        }
    }

    public function honk(){
        echo self::$signal;
    }

    public function turnOnWipers(){
        //...
    }
}

class Tank implements VehicleInterface
{
    public $destructiveness = 20;
    public $crew = 3;
    public $signal = 'Bup';
    public function goAheadOrBack() {}

    public function specialPossibilites()
    {
        function shoot(){
        //... 
        }
    }
    public function honk(){
        echo self::$signal;
    }

    public function turnOnWipers(){
        //exception
    }
}

class specializedMachinery implements VehicleInterface
{
    public $loadCapacity = 30;
    public $weight = 4;
    public $signal = 'Beep-beep-beep';
    public function goAheadOrBack() {}

    public function specialPossibilites()
    {
        function moveBucket(){
            //...
        } 
    }
    public function honk(){
        echo self::$signal;
    }

    public function turnOnWipers(){
        //...
    }
}

function testVehicle(VehicleInterface $vehicle) {
  $vehicle->goAheadOrBack();
  $vehicle->specialPossibilites();
}

?>