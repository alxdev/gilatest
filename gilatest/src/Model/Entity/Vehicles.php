<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

abstract class Vehicle extends Entity
{
    abstract public function getWheels();
  
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
