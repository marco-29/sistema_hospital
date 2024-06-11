    <section class="container mt-5">
        <div class="row">
            <div class="col-lg-12 d-none d-sm-block">
                <div id="carouselplanetas" class="carousel slide mt-5">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <a href="<?php echo site_url('planetas/neptuno'); ?>">
                                        <img src="almacenamiento/recursos/Neptuno.png" class="d-block img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="<?php echo site_url('planetas/urano'); ?>">
                                        <img src="almacenamiento/recursos/Urano.png" class="d-block img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="<?php echo site_url('planetas/saturno'); ?>">
                                        <img src="almacenamiento/recursos/Saturno.png" class="d-block img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <a href="<?php echo site_url('planetas/jupiter'); ?>">
                                        <img src="almacenamiento/recursos/Jupiter.png" class="d-block img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="<?php echo site_url('planetas/marte'); ?>">
                                        <img src="almacenamiento/recursos/Marte.png" class="d-block img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="<?php echo site_url('planetas/tierra'); ?>">
                                        <img src="almacenamiento/recursos/Tierra.png" class="d-block img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselplanetas" data-bs-slide="prev" style="margin-left: -10%;">
                        <span class="" aria-hidden="true"><img src="<?php echo base_url('almacenamiento/recursos/previous.png') ?>" alt="" width="50%"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselplanetas" data-bs-slide="next" style="margin-right: -5%;">
                        <span class="" aria-hidden="true"><img src="<?php echo base_url('almacenamiento/recursos/next.png') ?>" alt="" width="50%"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

            <div class="col-lg-12 d-flex justify-content-center mt-10 d-block d-sm-none">
                <div id="carouselplanetasmovil" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="<?php echo site_url('planetas/neptuno'); ?>">
                                <img src="almacenamiento/recursos/Neptuno.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="<?php echo site_url('planetas/urano'); ?>">
                                <img src="almacenamiento/recursos/Urano.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="<?php echo site_url('planetas/saturno'); ?>">
                                <img src="almacenamiento/recursos/Saturno.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="<?php echo site_url('planetas/jupiter'); ?>">
                                <img src="almacenamiento/recursos/Jupiter.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="<?php echo site_url('planetas/marte'); ?>">
                                <img src="almacenamiento/recursos/Marte.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="<?php echo site_url('planetas/tierra'); ?>">
                                <img src="almacenamiento/recursos/Tierra.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselplanetasmovil" data-bs-slide="prev">
                        <span class="" aria-hidden="true"><img src="<?php echo base_url('almacenamiento/recursos/previous.png') ?>" alt="" width="50%"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselplanetasmovil" data-bs-slide="next">
                        <span class="" aria-hidden="true"><img src="<?php echo base_url('almacenamiento/recursos/next.png') ?>" alt="" width="50%"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>