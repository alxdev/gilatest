<h1>Vehiculos</h1>
<table>
    <tr>
        <th>Tipo</th>
        <th>Número de llantas</th>
        <th>HP</th>
        <th>Fecha de creación</th>
    </tr>
    
    <?php foreach ($vehicles as $vehicle): ?>
    <tr>
        <td>
            <?= $this->Html->link($vehicle->vehicle_type, ['action' => 'view', $vehicle->vehicle_type]) ?>
        </td>
        <td>
            <?= $vehicle->wheels ?>
        </td>
        <td>
            <?= $vehicle->hp ?>
        </td>
        <td>
            <?= $vehicle->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<button type="submit">
  <?= $this->Html->link('Agregar vehículo', ['action' => 'add']) ?>
</button>