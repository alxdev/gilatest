<h1>Add Vehicle</h1>
<?php
    echo $this->Form->create($vehicle);
    echo $this->Form->control('vehicle_type');
    echo $this->Form->control('wheels');
    echo $this->Form->control('hp');
    echo $this->Form->button(__('Save vehicle'));
    echo $this->Form->end();
?>