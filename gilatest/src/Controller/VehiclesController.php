<?php

namespace App\Controller;

use App\Model\Entity\Sedan;
use App\Model\Entity\Moto;

class VehiclesController extends AppController
{
    public function index()
    {  
          $this->loadComponent('Paginator');
          $vehicles = $this->Paginator->paginate($this->Vehicles->find());
          $this->set(compact('vehicles'));
    }
    
    public function add()
    {
        $vehicle = $this->Vehicles->newEmptyEntity();
        if ($this->request->is('post')) {
          
            $data = $this->request->getData();
            
            if($data['vehicle_type'] == 'sedan'){
              $sedan = new Sedan();
              $data['wheels'] = $sedan->getWheels();
            }else if($data['vehicle_type'] == 'moto'){
              $moto = new Moto();
              $data['wheels'] = $moto->getWheels();
            }
          
            $vehicle = $this->Vehicles->patchEntity($vehicle, $data);

            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('El vehículo ha sido guardado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your vehicle.'));
        }
        $this->set('vehicle', $vehicle);
    }
}