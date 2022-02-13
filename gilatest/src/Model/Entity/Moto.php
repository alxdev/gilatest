<?php

namespace App\Model\Entity;

require_once('Vehicles.php');

class Moto extends Vehicle
{
  public function getWheels()
  {
    return '2';
  }
}
