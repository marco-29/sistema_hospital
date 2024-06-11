<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIUFO</title>

    <meta property="og:title" content="diufo">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://diufo-tesis.000webhostapp.com/">
    <meta property="og:image" content="<?php echo base_url('almacenamiento/recursos/og.jpg'); ?>">
    <meta property="og:site_name" content="diufo-tesis.000webhostapp.com">
    <meta property="og:description" content="DIUFO software para niños con transtorno de dislexia fonologica">

    <link rel="apple-touch-icon" href="<?php echo base_url('almacenamiento/recursos/diufo.png'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>almacenamiento/recursos/diufo.png">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/css-bootstrap/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles-aprende.css') ?>">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(201, 201, 201, 0);">

        <div class="container-fluid">
            <div class="ms-1" style="width: 40%;">
                <h3 style="color:greenyellow;"><b>Tu avance: </b></h3>
                <div class="progress progress-striped active" style="height: 40px;">
                    <div id="progress-bar" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:<?php echo $usuario_progreso->progreso_aprende; ?>%">
                        <?php echo $usuario_progreso->progreso_aprende; ?>%
                    </div>
                </div>
            </div>
            <form class="d-flex">
                <div>
                    <a href="#" id="btnMeteoro"><img src="<?php echo base_url('almacenamiento/recursos/meteoro.png') ?>" alt="" class="img-fluid" width="100"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="optionsModal" tabindex="-1" role="dialog" aria-labelledby="optionsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content bg-meteoro">
                                <div class="modal-header">
                                    <h5 class="modal-title text-white" id="optionsModalLabel">Menu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Opciones a mostrar -->
                                    <ul class="list-group">
                                        <li class="list-group-item bg-glass"><a href="<?php echo base_url('aprende/aprende'); ?>">Menu aprende</a></li>
                                        <li class="list-group-item bg-glass"><a href="<?php echo base_url('menu'); ?>">Menu planetas</a></li>
                                        <li class="list-group-item bg-glass"><a href="<?php echo base_url('estadisticas'); ?>">Estadisticas</a></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </nav>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#btnMeteoro').click(function(e) {
                e.preventDefault();
                $('#optionsModal').modal('show');
            });
        });
    </script>