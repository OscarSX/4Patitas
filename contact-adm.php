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
                        <h4>Opiniones de nuestros clientes</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <center> <br><br>
        <table cellpadding="10" style="width: 80%">
        <tr>
            <th>Asunto</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            <th></th>
        </tr>
        <tbody>
            <?php
            include 'php/connectionAlt.php';

            $consulta = "SELECT * FROM opinion ORDER BY fecha ASC";
            $resultado = $conn->query($consulta);

            while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td> <?php echo $row['asunto']; ?> </td>
                    <td> <?php echo $row['mensaje']; ?> </td>
                    <td> <?php echo $row['fecha']; ?> </td>
                    <td> <a href="php/deleteOpinion.php?idOpinion=<?php echo $row['idOpinion']; ?>" style="color:#FF0000;">Eliminar</a> </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </center>

    <br><br><br>


    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <p style="text-align:center"><span>4Patitas</span> - Clinica Veterinaria </p>
            </div>
        </div>
    </section>

</body>

</html>