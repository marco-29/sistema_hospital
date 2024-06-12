<div id="contenedor">
    <div id="central">
        <div id="login">
            <div class="titulo">
                <img src="<?php echo base_url('almacenamiento/recursos/icon.png') ?>" alt="" width="50%">
            </div>
            <?php echo form_open('login/iniciar_sesion', array('id' => 'forma-login', 'class' => 'form-horizontal')); ?>
            <input type="text" name="usuario" placeholder="Usuario" required>

            <input type="password" placeholder="Contraseña" name="password" required>

            <button type="submit" title="Ingresar" name="Ingresar">Login</button>
            <?php echo form_close(); ?>
            <div class="pie-form">
                <a href="<?php echo base_url('registrar') ?>">¿No tienes Cuenta? Registrate</a>
            </div>
        </div>
        <div class="inferior">
            <a href="<?php echo base_url('') ?>">Volver</a>
        </div>
    </div>
</div>