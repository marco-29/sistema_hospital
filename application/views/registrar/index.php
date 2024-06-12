<div id="contenedor">
    <div id="central">
        <div id="login">
            <div class="titulo">
                <img src="<?php echo base_url('almacenamiento/recursos/icon.png') ?>" alt="" width="50%">
            </div>
            <?php echo form_open('registrar/registrar_usuario', array('id' =>'forma-registrar','class' => 'form-horizontal')); ?>
                <div class="col-lg-12 col-md-12 col-sm-12 my-3">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre" required>
                    <div class="col-lg-12 col-md-12 col-sm-12 my-3">
                    <input type="text" class="form-control" name="usuario" id="usuario" value="" placeholder="Usuario" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 my-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                </div>
                <div class="d-grid gap-2 my-3">
                    <button class="btn btn-primary boton-login" type="submit">Registrar</button>
                </div>
            <?php echo form_close(); ?>
            <div class="pie-form">
                <a href="<?php echo base_url('login')?>">¿Ya tienes Cuenta? Inicia sesion</a>
            </div>
        </div>
        <div class="inferior">
            <a href="<?php echo base_url('')?>">Volver</a>
        </div>
    </div>
</div>