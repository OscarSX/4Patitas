<?php
session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>4Patitas | Iniciar Sesión</title>
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
                                        <li><a href="about.php">Acerca de Nosotros</a></li>
                                <?php
                                    } else  { 
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="date.php">Citas</a></li>
                                        <li><a href="store.php">Tienda</a></li>
                                        <li><a href="contact.php">Danos tu Opinión</a></li>
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

    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Iniciar Sesión</h2>
            </div>
        </div>
    </section>



    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <img src="img/back-ini.png" width="90%" height="90%">

                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Inicia Sesión</h3>
                                <p>Inicia sesión para entrar a la plataforma</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form id="login_form" role="form" class="login-form" action="php/login.php" method="POST">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="email" name="valEmail" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" name="valPassword" class="form-control" placeholder="Contraseña" aria-describedby="basic-addon1" required>
                                </div>
                                <button type="submit" class="btn">Iniciar Sesión</button>
                                <p> 
                                    <br> &iquest;Aún no tienes una cuenta? <br>
                                    Puedes <a href="signin.php">registrarte</a>
                                </p>
                            </form>
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