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
                                        header("location:index.php");
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li class="active"><a href="store.php">Tienda</a></li>
                                        <li><a href="about.php">Acerca de Nosotros</a></li>
                                <?php
                                    } else if (isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 1) { 
                                ?>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="date-adm.php">Citas</a></li>
                                        <li class="active"><a href="store-adm.php">Tienda</a></li>
                                        <li><a href="contact-adm.php">Danos tu Opinión</a></li>
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
                <h2>Actualizar la información del producto</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Producto</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <center>
                <div class="section-heading text-center" style="width:55%">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <label>Actualiza la información de un producto</label>
                            </div>
                        </div>
                        <?php
                            include 'php/connectionAlt.php';

                            $idProducto= $_REQUEST['idProd'];

                            $consulta = "SELECT idProducto, nombre, imagen, precio, descripcion FROM producto WHERE idProducto='$idProducto'";
                            $resultado = $conn->query($consulta);

                            $row = $resultado->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="form-bottom">
                            <form role="form" class="login-form" action="php/updateProduct.php?idProd=<?php echo $row['idProducto']; ?>" method="POST" enctype="multipart/form-data">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"></span>
                                    <input type="text" name="valNombre" class="form-control" placeholder="Nombre del producto" aria-describedby="basic-addon1" value=<?php echo $row['nombre']; ?> required>
                                </div>
                                <img height="150px" src="data: image/jpg; base64, <?php echo base64_encode($row['imagen']); ?>" /> <br><br>
                                <p>Selecciona la imagen del producto</p>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"></span>
                                    <input type="file" name="image" class="form-control" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"></span>
                                    <input type="number" step="any" name="valPrecio" class="form-control" placeholder="Precio del producto" aria-describedby="basic-addon1" value=<?php echo $row['precio']; ?> required>
                                </div>
                                <div >
                                    <p>Descripción del producto</p>
                                    <textarea name="valDescripcion" required="required" class="form-control" rows="4"><?php echo $row['descripcion']; ?></textarea>
                                </div>
                                <button type="submit" class="btn">Guardar cambios</button>
                            </form>
                        </div>
                    </div>
                </div>
            </center>

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