<?php
session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>4Patitas | Tienda</title>
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
                                        <li class="active"><a href="store.php">Tienda</a></li>
                                        <li><a href="about.php">Acerca de Nosotros</a></li>
                                <?php
                                    } else if (isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 0) { 
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="date.php">Citas</a></li>
                                        <li class="active"><a href="store.php">Tienda</a></li>
                                        <li><a href="contact.php">Danos tu Opinión</a></li>
                                        <li><a href="about.php">Acerca de Nosotros</a></li>
                                <?php 
                                    } else { 
                                        header("location:php/signout.php");
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

    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>&iexcl;Bienvenido a nuestra tienda!</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Catálogo</h4>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>



    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center">
                    <div class="col-md-12 col-xs-12">
                        <p class="subheading">Aquí puedes encontrar la variedad de productos con lo que cuenta nuestra clinica veterinaria.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    include 'php/connectionAlt.php';

                    $consulta = "SELECT idProducto, nombre, imagen, precio, descripcion FROM producto";
                    $resultado = $conn->query($consulta);

                    while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"> <img src="data: image/jpg; base64, <?php echo base64_encode($row['imagen']); ?>" /> </div>
                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 class="title"><?php echo $row['nombre'];?></h5> 
                            <p> <?php echo $row['descripcion']; ?> </p>
                            <p> $<?php echo $row['precio']; ?> MXN. </p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                <?php
                    }
                ?>
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