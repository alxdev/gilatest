<?php

namespace App\Model\Entity;

require_once('Vehicles.php');

class Sedan extends Vehicle
{  
  public function getWheels()
  {
    return '4';
  }
}
