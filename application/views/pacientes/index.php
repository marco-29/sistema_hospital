<a href="<?php echo base_url('pacientes/agregar')?>"><button type="submit" title="Ingresar" name="Ingresar">Agrgar paciente</button></a>
<button type="submit" title="Ingresar" name="Ingresar">Agregar enfermedad</button>

<table summary="Los grupos de música punk más famosos del Reino Unido">
  <caption>
    Pacientes
  </caption>
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Peso</th>
      <th scope="col">Telefono</th>
      <th scope="col">Enfermedad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pacientes_list as $key => $paciente_row) :?>
    <tr>
      <th scope="row"><?php echo $paciente_row->identificador;?></th>
      <td><?php echo $paciente_row->nombre;?></td>
      <td><?php echo $paciente_row->edad;?></td>
      <td><?php echo $paciente_row->peso;?></td>
      <td><?php echo $paciente_row->telefono;?></td>
      <td><?php echo $paciente_row->nombre_enfermedad;?></td>
      <td><a href="<?php echo base_url('pacientes/eliminar/'.$paciente_row->identificador)?>" style="color: white;">ELIMINAR</a> | <a href="" style="color: white;">EDITAR</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br>
<br>
<br>

<table summary="Los grupos de música punk más famosos del Reino Unido">
  <caption>
    Enfermedades
  </caption>
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($enfermeddes_list as $key => $enfermedad) :?>
    <tr>
      <th scope="row"><?php echo $enfermedad->identificador;?></th>
      <td><?php echo $enfermedad->nombre;?></td>
      <td><?php echo $enfermedad->descripcion;?></td>
      <td><a href="<?php echo base_url('pacientes/eliminar_enfermedad/'.$enfermedad->identificador)?>" style="color: white;">ELIMINAR</a> | <a href="" style="color: white;">EDITAR</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<!-- <?php print_r($pacientes_list)?> -->