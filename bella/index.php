<?php

class Vehicles {
    public $name;
    public $model;
    public $makeYear;
    public $color;
    public $fuelType;

    function __construct($name, $model, $makeYear, $color, $fuelType){
        $this->name =$name;
        $this->model=$model;
        $this->makeYear=$makeYear;
        $this->color=$color;
        $this->fuelType=$fuelType;
    }

    public function carModel(){
        $displayCar = $this->name ." " . $this->model;
        return $displayCar;
    }
}

$myCarObj = new Vehicles('VW', 'Polo', '2020', 'red', 'gas');
$rtnVal= $myCarObj->carModel();
print "I own a $rtnVal."; 

$yourCarObj = new Vehicles ('BMW', 'Cabrio', '2009', 'black', 'gas');
$rtnVal2 = $yourCarObj->carModel();
print "<br>You own a $rtnVal2.";

$herCarObj = new Vehicles('VW', 'Golf', '2015', 'anthracite', 'gas');
$rtnVal3= $herCarObj->carModel();
print "<br>She owns a $rtnVal3.";



class Ships extends Vehicles {
    public $shape;
    public $material;

    function __construct($name, $model, $makeYear, $color, $fuelType, $shape, $material){
        $this->name =$name;
        $this->model=$model;
        $this->makeYear=$makeYear;
        $this->color=$color;
        $this->fuelType=$fuelType;
        $this->shape=$shape;
        $this->material=$material;
    }

    public function shipModel(){
        $displayShip= " <br>This ". $this->color ." ". $this->name . " ".$this->model . " is a ship made out of " . $this->material . " and shaped like an " . $this->shape . ". It refuels with " . $this->fuelType . " and got produced in the Year " . $this->makeYear .".";
        
        return $displayShip;
    }
}

$ship1 = new Ships('Lightning', 'Motorboat', '2006', 'beige', 'gas', 'oval', 'aluminium');
print $ship1->shipModel();

$ship2= new Ships ('Anna', 'Motorboat', '2020', 'white', 'gas', 'oval', 'aluminium');
print $ship2->shipModel();

$ship3 = new Ships('Sophia', 'Motorboat', '2015', 'red-white', 'gas', 'oval', 'aluminium');
print $ship3->shipModel();
?>