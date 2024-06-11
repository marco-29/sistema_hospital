<section class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row bg-luna col-lg-4 col-md-4 col-sm-4">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-center justify-content-center my-3">
            <img class="img-fluid" src="<?php echo base_url('almacenamiento/logos/logo.png') ?>" alt="" width="60%">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
            <div class="text-center">
                <h6 class="mb-0">
                    <span>Inicio de sesión</span>
                </h6>
                <hr>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php echo form_open('login/iniciar_sesion', array('id' =>'forma-login','class' => 'form-horizontal')); ?>
                <div class="col-lg-12 col-md-12 col-sm-12 my-3">
                    <input type="text" class="form-control" name="usuario" id="usuario" value="" placeholder="Usuario" required>
                    <div class="valid-feedback">
                        Usuario valido
                    </div>
                    <div class="invalid-feedback">
                        Se requiere un usuario valido.
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 my-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                    <div class="valid-feedback">
                        Contraseña valida
                    </div>
                    <div class="invalid-feedback">
                        Se requiere una contraseña valida.
                    </div>
                </div>
                <div class="d-grid gap-2 my-3">
                    <button class="btn btn-primary boton-login" type="submit">Iniciar</button>
                </div>
            <?php echo form_close(); ?>
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-3 mb-5">
                <a href="<?php echo base_url('registrar')?>" class="mx-2 letra-1"><span>Registrarme</span></a>
                <a href="<?php echo base_url('')?>" class="mx-2 letra-1"><span>volver</span></a>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>