
<?php
interface Vehicle {
    public function goAheadOrBack();
    public function specialPossibilites();
}
interface HonkingVehicle {
    public function honk();
}
interface VehicleWithWipers {
    public function turnOnWipers();
}


class Car implements Vehicle, HonkingVehicle, VehicleWithWipers {
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

class Tank implements Vehicle, HonkingVehicle {
    public $destructiveness = 20;
    public $crew = 3;
    public $signal = 'Bup';
    public function goAheadOrBack() {}

    public function specialPossibilites(){
        function shoot(){
        //...
        }
    }

    public function honk(){
        echo self::$signal;
    }


}

class specializedMachinery implements Vehicle, HonkingVehicle, VehicleWithWipers {
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

function testVehicle(Vehicle $vehicle) {
  $vehicle->goAheadOrBack();
  $vehicle->specialPossibilites();
}

?>