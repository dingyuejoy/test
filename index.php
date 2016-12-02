<?php

include_once(dirname(__FILE__).'/bootstrap.php');

use Homework\Car;

$car = new Car;
echo $car->getColor();
