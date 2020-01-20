<?php
session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>4Patitas | Acerca de nosotros</title>
        <link rel="shortcut icon" href="img/icon.png" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="scss/main.css">
        <link rel="stylesheet" href="scss/skin.css">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="./script/index.js"></script>
    </head>
    
    <body id="wrapper">
    
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">
                                <h1>4Patitas</h1><span>Clinica Veterinaria</span></a>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <?php  
                                    if(!isset($_SESSION["usuario"]) ){  
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="store.php">Tienda</a></li>
                                        <li class="active"><a href="about.php">Acerca de Nosotros</a></li>
                                <?php
                                    } else if (isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 0) { 
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="date.php">Citas</a></li>
                                        <li><a href="store.php">Tienda</a></li>
                                        <li><a href="contact.php">Danos tu Opinión</a></li>
                                        <li class="active"><a href="about.php">Acerca de Nosotros</a></li>
                                <?php 
                                    } else { 
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="date-adm.php">Citas</a></li> 
                                        <li><a href="store-adm.php">Tienda</a></li>
                                        <li><a href="contact-adm.php">Danos tu Opinión</a></li>
                                        <li class="active"><a href="about.php">Acerca de Nosotros</a></li>
                                <?php 
                                    } 
                                ?>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </nav>
        </header>

    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Misión y Visión</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Misión</h4>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section id="about-page-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 text-align">
                    <p>
                        La calidad en la atención que ofrecemos a nuestros pacientes y la búsqueda de mejoras en el
                        tratamiento y prevención de la salud, junto con la Optimización de los tiempos del cliente para realizar
                        una cita o compra de algún producto, son los principales ejes:
                        <ol>
                            <li type="disc">Trabajar para mejorar el bienestar animal, defendiendo sus derechos y evitándoles cualquier tipo
                                de sufrimiento.</li>
                            <li type="disc">Ofrecer a nuestros clientes de los mejores productos y de las soluciones de más valor.</li>
                            <li type="disc">Ofrecer a nuestros pacientes el mejor tratamiento médico, trato humano y excelencia en el
                                servicio.</li>
                            <li type="disc">Ser líderes en el sector veterinario con servicios mejores y diferenciados.</li>
                            <li type="disc">Asegurar la innovación tecnológica.</li>
                            <li type="disc">Mantener la voluntad constante de mejora de los servicios prestados.</li>
                            <li type="disc">Trabajar para mejorar el bienestar animal, defendiendo sus derechos y evitándoles cualquier tipo
                                de sufrimiento.</li>
                            <li type="disc">Implicarnos en la preservación del entorno natural y del medio ambiente.</li>
                        </ol>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <img height="" width="auto" src="img/aboutVet.jpg" class="attachment-full img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="top_banner">
            <div class="page_info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <h4>Visión</h4>
                        </div>
                    </div>
                </div>
            </div>
    
            </div>
        </section>
    
        <section id="about-page-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 text-align">
                        <p>
                            Ser un centro de atención médica veterinaria que trascienda en la localidad y sus fronteras por la
                            calidad en los servicios vanguardistas que proporciona; logrados a través de la disciplina, el trabajo, el
                            esfuerzo y la paciencia, para ejercer el liderazgo necesario en la asistencia médica, que apoyado por
                            equipo tecnológico de punta, permita lograr la satisfacción de los pacientes, su familia y la sociedad.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                        <img height="" width="auto" src="img/aboutVet2.jpg" class="attachment-full img-responsive" alt="">
                    </div>
                </div>
            </div>
        </section>
        <br>
    <section id="team-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xol-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h1>Nuestro <span>Equipo</span></h1>
                        <p class="subheading">Nuestra clinica veterinaria esta conformada por nuestros siguientes especialistas.</p>
                    </div>
                
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/team-4.jpg" />
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Casandra Flores Luna</h5>
                                            </div>
                                            <div class='our-team-text-inner'>
                                                <div class='our-team-description'>
                                                    <p>Médico veterinario</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                            <div class="our-team-image">
                                                <img src="img/team-4-2.png" />
                                            </div>
                                            <div class="our-team-info">
                                                <div class="our-team-title-holder">
                                                    <h5 class="our-team-name">Andrea Flores Zaragoza</h5>
                                                </div>
                                                <div class='our-team-text-inner'>
                                                    <div class='our-team-description'>
                                                        <p>Médico veterinario</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-inner">
                                            <div class="our-team-image">
                                                <img src="img/team-4-3.jpg" />
                                            </div>
                                            <div class="our-team-info">
                                                <div class="our-team-title-holder">
                                                    <h5 class="our-team-name">Marco Tepepa Rodriguez</h5>
                                                </div>
                                                <div class='our-team-text-inner'>
                                                    <div class='our-team-description'>
                                                        <p>Cirujano veterinario</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <p style="text-align:center"><span>4Patitas</span> - Clinica Veterinaria </p>
            </div>
        </div>
    </section>

</body>

</html>