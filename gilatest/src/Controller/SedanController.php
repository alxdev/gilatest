<?php

namespace App\Controller;

class SedanController extends AppController
{
    public function index()
    {
          $this->loadComponent('Paginator');
          //$vehicles = $this->Paginator->paginate($this->Vehicles->find());
          //$this->set(compact('vehicles'));
    }
    
    public function add(){
      $sedan = new Sedan();
      //$sedan = $this->Sedan->newEmptyEntity();
      //$this->set('sedan', $sedan);
    }
}
