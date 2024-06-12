<div id="contenedor">
    <div id="central">
        <div id="login">
            <div class="titulo">
                <img src="<?php echo base_url('almacenamiento/recursos/icon.png') ?>" alt="" width="50%">
            </div>
            <?php echo form_open('pacientes/agregar_paciente', array('id' => 'forma-registrar', 'class' => 'form-horizontal')); ?>
            <div>
                <label for="enfermedad">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre" required>
                <div>
                    <label for="enfermedad">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad" value="" placeholder="edad" required>
                </div>
                <div>
                    <label for="enfermedad">Peso</label>
                    <input type="number" class="form-control" name="peso" id="peso" placeholder="Peso" required>
                </div>
                <div>
                    <label for="enfermedad">Telefono</label>
                    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
                </div>
                <div>
                    <label for="enfermedad">Selecciona una enfermedad:</label>
                    <select name="enfermedad" id="enfermedad">
                        <?php foreach ($enfermeddes_list as $id => $enfermedad) : ?>
                            <option value="<?php echo $enfermedad->identificador; ?>"><?php echo $enfermedad->nombre; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="d-grid gap-2 my-3">
                    <button class="btn btn-primary boton-login" type="submit">Guardar</button>
                </div>
                <?php echo form_close(); ?>
                <div class="inferior">
                    <a href="<?php echo base_url('pacientes') ?>">Volver</a>
                </div>
            </div>
        </div>

        <!-- <?php print_r($enfermeddes_list) ?> -->