<?php
/*

Procedural Programming (P.P) - writing procedures or FUNCTIONS that perform operations on the data
vs
OOP (Object-Oriented Programming) - is about creating objects that contain both data and functions.

*/

// ======== P.P model

$bmw_car_name = 'name';
$bmw_car_has_engine = true;
$bmw_car_model;
$bmw_owner = 'Roy';

function bmw_start_engine()
{
    global $bmw_car_has_engine, $bmw_car_name;
    if ($bmw_car_has_engine) {
        echo "Engine " . $bmw_car_name . " was started! <br>";
    }
}

function set_bmw_model($model)
{
    global $bmw_car_model;
    $bmw_car_model = $model;
}
set_bmw_model(2020);


$honda_car_name = 'Honda';
$honda_car_has_engine = true;
$honda_car_model;

function honda_start_engine()
{
    global $honda_car_has_engine, $honda_car_name;
    if ($honda_car_has_engine) {
        echo "Engine " . $honda_car_name . " was started! <br>";
    }
}

function set_honda_model($model)
{
    global $honda_car_model;
    $honda_car_model = $model;
}
set_honda_model(2020);




// ========== OOP model

// This is class
class Car
{
    public $name;
    public $has_engine = true;

    public function __construct($car_name)
    {
        $this->name = $car_name;
        echo "Class has started! <br>";
    }

    public function __destruct()
    {
        echo "Class has been excuted! <br>";
    }

    public function start_engine()
    {
        if ($this->has_engine) {
            echo "Engine " . $this->name . " was started! <br>";
        }
    }

    public function set_car_model($model)
    {
        $this->model = $model;
    }
}

// $bmw = new Car;
$bmw = new Car("BMW");
// $bmw->name = "BMW";
$bmw->start_engine();
$bmw->set_car_model(2020);

$honda = new Car("Honda");
// $honda->name = "Honda";
$honda->has_engine = false;
$honda->model = 2021;
$honda->start_engine();

var_dump($bmw);
var_dump($honda);
