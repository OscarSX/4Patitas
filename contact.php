<?php
session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>4Patitas | Danos tu opinión</title>
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
                                    } else if (isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 0)  { 
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="date.php">Citas</a></li>
                                        <li><a href="store.php">Tienda</a></li>
                                        <li class="active"><a href="contact.php">Danos tu Opinión</a></li>
                                        <li><a href="about.php">Acerca de Nosotros</a></li>
                                <?php 
                                    } else { 
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="date-adm.php">Citas</a></li> 
                                        <li><a href="store-adm.php">Tienda</a></li>
                                        <li class="active"><a href="contact-adm.php">Danos tu Opinión</a></li>
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
                <h2>&iexcl;Queremos saber lo que piensas!</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Envianos tu opinión</h4>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="php/contact.php">
                    
                    <div >
                        <div class="form-group">
                            <label>Asunto</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-default submit-button">Enviar Mensaje <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </form>
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