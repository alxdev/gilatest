<h1>Agregar Vehiculo</h1>
<?php
    echo $this->Form->create($vehicle);
    echo $this->Form->select('vehicle_type', ['sedan' => 'Sedan', 'moto' => 'Motorcycle'], ['empty' => '(Escoga el tipo de vehículo)']);
    echo $this->Form->control('hp');
    echo $this->Form->button(__('Guardar vehiculo'));
    echo $this->Form->end();
?>