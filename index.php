<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>4Patitas | Inicio</title>
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
                                    <li class="active"><a href="index.php">Inicio</a></li>
                                    <li><a href="store.php">Tienda</a></li>
                                    <li><a href="about.php">Acerca de Nosotros</a></li>
                            <?php
                                } else if (isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 0) { 
                            ?>
                                    <li class="active"><a href="index.php">Inicio</a></li>
                                    <li><a href="date.php">Citas</a></li>
                                    <li><a href="store.php">Tienda</a></li>
                                    <li><a href="contact.php">Danos tu Opinión</a></li>
                                    <li><a href="about.php">Acerca de Nosotros</a></li>
                            <?php 
                                } else { 
                            ?>
                                    <li class="active"><a href="index.php">Inicio</a></li>
                                    <li><a href="date-adm.php">Citas</a></li> 
                                    <li><a href="store-adm.php">Tienda</a></li>
                                    <li><a href="contact-adm.php">Danos tu Opinión</a></li>
                                    <li><a href="about.php">Acerca de Nosotros</a></li>
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
    <!--/.nav-ends -->

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/banner-slide-1.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">4Patitas</h1>
                    <h3 class="banner_heading"><span>Clinica Veterinaria</span></h3>
                    <p class="banner_txt">Calidad en la atención que ofrecemos a nuestros pacientes y la búsqueda de mejoras en el
                        tratamiento y prevención de la salud de nuestros pequeños amigos.</p>
                    <div class="slider_btn">
                            <?php  
                                if(!isset($_SESSION["usuario"]) ){  
                            ?>
                                    <button type="button" class="btn btn-default slide" onclick="location.href='login.php'">Iniciar sesión <i class="fa fa-caret-right"></i></button>
                                    <button type="button" class="btn btn-primary slide" onclick="location.href='signin.php'">Registrate <i class="fa fa-caret-right"></i></button>
                            <?php
                                } else  {
							        echo "<h2> Bienvenido ". $_SESSION["usuario"]["nombre"] ."</h2>";
                            ?>
                                    <button type="button" class="btn btn-default slide" onclick="location.href='php/signout.php'"> <i class="fa fa-caret-left"></i> Cerrar sesión </button>
                            <?php 
                                }
                            ?>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/banner-slide-2.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">4Patitas</h1>
                    <h3 class="banner_heading"><span>Clinica Veterinaria</span></h3>
                    <p class="banner_txt">Calidad en la atención que ofrecemos a nuestros pacientes y la búsqueda de mejoras en el
                        tratamiento y prevención de la salud de nuestros pequeños amigos.</p>
                    <div class="slider_btn">
                        <?php  
                            if(!isset($_SESSION["usuario"]) ){  
                        ?>
                                <button type="button" class="btn btn-default slide" onclick="location.href='login.php'">Iniciar sesión <i class="fa fa-caret-right"></i></button>
                                <button type="button" class="btn btn-primary slide" onclick="location.href='signin.php'">Registrate <i class="fa fa-caret-right"></i></button>
                        <?php
                            } else  {
                                echo "<h2> Bienvenido ". $_SESSION["usuario"]["nombre"] ."</h2>";
                        ?>
                                <button type="button" class="btn btn-default slide" onclick="location.href='php/signout.php'"> <i class="fa fa-caret-left"></i> Cerrar sesión </button>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/banner-slide-3.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">4Patitas</h1>
                    <h3 class="banner_heading"><span>Clinica Veterinaria</span></h3>
                    <p class="banner_txt">Calidad en la atención que ofrecemos a nuestros pacientes y la búsqueda de mejoras en el
                        tratamiento y prevención de la salud de nuestros pequeños amigos.</p>
                    <div class="slider_btn">
                        <?php  
                            if(!isset($_SESSION["usuario"]) ){  
                        ?>
                                <button type="button" class="btn btn-default slide" onclick="location.href='login.php'">Iniciar sesión <i class="fa fa-caret-right"></i></button>
                                <button type="button" class="btn btn-primary slide" onclick="location.href='signin.php'">Registrate <i class="fa fa-caret-right"></i></button>
                        <?php
                            } else  {
                                echo "<h2> Bienvenido ". $_SESSION["usuario"]["nombre"] ."</h2>";
                        ?>
                                <button type="button" class="btn btn-default slide" onclick="location.href='php/signout.php'"> <i class="fa fa-caret-left"></i> Cerrar sesión </button>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="gmap">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-7 map-content">
                            <ul class="row">
                                <li>
                                    <address>
									<h5>&iquest;Dónde nos encontramos?</h5>
									<p> 4Patitas <br>
									202, Parishram Complex,<br>
									Mithakhali Six Roads,<br>
									Navrangpura, Ahmedabad,<br>
									Gujarat, India. </p>
									<p>Phone:+91 848 594 5080 <br>
									Email Address: 4p_clinica-veterinaria@outlook.com</p>
								</address>

                                </li>
                            </ul>
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