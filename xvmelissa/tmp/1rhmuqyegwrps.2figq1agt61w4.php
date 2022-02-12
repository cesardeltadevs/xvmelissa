﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <meta charset="utf-8" />

    <title>Regina XV Años</title>

    <link href="<?= ($ruta) ?>favicon.ico" rel="icon" type="image/x-icon" />
    <link href="<?= ($ruta) ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= ($ruta) ?>css/regina.css" rel="stylesheet" />

    <script src="<?= ($ruta) ?>js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="<?= ($ruta) ?>js/bootstrap.bundle.min.js" type="text/javascript"></script>    
</head>
<body>
    <div class="contaier-fluid">
        <div class="row" id="seccion1">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <!--<h1 class="titulo text-center" id="nombre">Regina</h1>-->
                <img src="<?= ($ruta) ?>img/Aro_nombre.png" alt="Aro 01" class="img-fluid w-100" />
                <p class="text-center texto1 fecha">30.Abril.2022</p>
            </div>
            <div class="col-md-4"></div>
            <br />
        </div>

        <div id="seccion2">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="titulo text-center texto1">Faltan...</h3>
                </div>
            </div>
            <div class="row" id="contadores">
                <div class="col-1"></div>
                <div class="col-11">
                    <div class="row">
                        <div class="col-4 contador text-center">
                            <span id="dias">00</span><br />días
                        </div>
                        <div class="col-4 contador text-center">
                            <span id="horas">00</span><br />horas
                        </div>
                        <div class="col-4 contador text-center">
                            <span id="minutos">00</span><br />minutos
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= ($ruta) ?>img/R.png" alt="Regina" class="img-fluid w-100" />
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

        <div id="seccion3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center titulo2 texto1">Mis papás</h2>
                    <p class="text-center nombres2 texto1">Uriel Rocha Vázquez</p>
                    <p class="text-center nombres2 texto1">Jessica Galván Vallejo</p>
                    <p><img src="<?= ($ruta) ?>img/greca.png" alt="Greca" class="img-fluid w-100" /></p>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center titulo2 texto1">Mi hermana</h2>
                    <p class="text-center nombres2 texto1">Renata Rocha Galván</p>
                    <p><img src="<?= ($ruta) ?>img/greca.png" alt="Greca" class="img-fluid w-100" /><br /></p>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center titulo2 texto1">Mi madrina</h2>
                    <p class="text-center nombres2 texto1">Yobana Rocha Vázquez</p>
                    <p><img src="<?= ($ruta) ?>img/greca.png" alt="Greca" class="img-fluid w-100" /><br /></p>
                </div>
            </div>
            <br />
        </div>

        <div id="seccion4">
            <br />
            <div class="row">
                <div class="col-6">
                    <img src="<?= ($ruta) ?>img/iglesia.png" alt="Igleisa" class="img-fluid w-100" />
                </div>
                <div class="col-6">
                    <span class="text-center texto1 titulo3">
                        Ceremonia <br />Religiosa
                    </span>
                    <p class="misa">6:15 pm</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center direccion">
                        <span class="texto1">Parroquia Redemptoris Mater</span> <br />
                        Cto. Fundadores 43, Cd. Satélite53100 <br /> Naucalpan de Juárez, Mex.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                    <a href="https://www.google.com/maps/place/Parroquia+Redemptoris+Mater/@19.5068951,-99.2304678,17z/data=!3m1!4b1!4m5!3m4!1s0x85d202dbdc23c779:0x2eabd732ac61977e!8m2!3d19.5070278!4d-99.2282804" target="_blank" class="text-center btn btn-secondary">MAPA</a>
                </div>
                <div class="col-5"></div>
            </div>
            <br />

            <div class="row">
                <div class="col-6">
                    <span class="text-center texto1 titulo3">
                        Recepción
                    </span>
                    <p class="misa">8:00 pm</p>
                </div>
                <div class="col-6">
                    <img src="<?= ($ruta) ?>img/salon.png" alt="Salon" class="img-fluid w-100" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center direccion">
                        <span class="texto1">Hacienda Puerto Grande</span> <br />
                        Alexander Von Humboldt, Lomas Verdes <br /> 3ra Secc, 53125, Naucalpan de Juárez, Méx
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                    <a href="https://www.google.com/maps/place/Hacienda+Puerta+Grande/@19.5133733,-99.2632895,17z/data=!3m1!4b1!4m5!3m4!1s0x85d203493b95c42b:0xf9a5c112e0d3c87d!8m2!3d19.5134931!4d-99.261107" target="_blank" class="text-center btn btn-secondary">MAPA</a>
                </div>
                <div class="col-5"></div>
            </div>
            <br />
        </div>

        <div id="seccion5">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carruselRenata" class="casousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carouselInner">
                            <div class="carousel-item active">
                                <img src="<?= ($ruta) ?>img/fondo51.png" alt="Slide 1" class="d-block w-100" />
                            </div>
                            <div class="carousel-item">
                                <img src="<?= ($ruta) ?>img/fondo52.png" alt="Slide 1" class="d-block w-100" />
                            </div>
                            <div class="carousel-item">
                                <img src="<?= ($ruta) ?>img/fondo53.png" alt="Slide 1" class="d-block w-100" />
                            </div>
                            <div class="carousel-item">
                                <img src="<?= ($ruta) ?>img/fondo54.png" alt="Slide 1" class="d-block w-100" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($codigo): ?>
            <div id="seccion6">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center titulo3">Lista de Asistencia</h3>
                        <img src="<?= ($ruta) ?>img/greca.png" alt="Greca" class="img-fluid w-100" />
                        <p>&nbsp;</p>
                        <?php if ($familia['tipo'] == '1'): ?>
                            
                                <h4 class="text-center direccion">FAMILIA: <br /> <strong><?= ($familia['familia']) ?></strong></h4>                                
                            
                            <?php else: ?>
                                <h4 class="text-center direccion">INVITADO ESPECIAL: <br /> <strong><?= ($familia['familia']) ?></strong></h4>
                            
                        <?php endif; ?>
                    </div>
                </div>
                <br />

                <?php foreach (($invitados?:[]) as $invitado): ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="rounded d-block w-75 cuadro-confirmar mx-auto">
                                <input type="hidden" value="<?= ($invitado['invitado']) ?>" />
                                <p class="text-center"><?= ($invitado['nombre']) ?></p>
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <button id="i<?= ($invitado['invitado']) ?>" class="btn btn-light" <?= ($confirmacion == "1" ? 'disabled="disabled"' : '') ?>>Confirmar</button>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                <?php endforeach; ?>                
            </div>
        <?php endif; ?>         

        <div id="seccion7">
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="hashtag-titulo text-center">Hashtag del Evento</h2>
                </div>
            </div>
        </div>

        <div id="seccion8">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>

    <script src="<?= ($ruta) ?>js/regina.js" type="text/javascript"></script>    
</body>
</html>
