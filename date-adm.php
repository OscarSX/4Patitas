<?php
session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>4Patitas | Citas</title>
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
                                    <li><a href="store.php">Tienda</a></li>
                                    <li><a href="about.php">Acerca de Nosotros</a></li>
                            <?php
                                } else if (isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 1) { 
                            ?>
                                    <li><a href="index.php">Inicio</a></li>
                                    <li class="active"><a href="date-adm.php">Citas</a></li>
                                    <li><a href="store-adm.php">Tienda</a></li>
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

    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Realiza una cita para tu pequeño amigo</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Citas Agendadas</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <center> </br></br>
        <table cellpadding="10" style="width: 85%">
        <tr>
            <th>Nom. del cliente</th>
            <th>Ap. del cliente</th>
            <th>Tel. del cliente</th>
            <th>Nom. de la mascota</th>
            <th>Raza</th>
            <th>Genero</th>
            <th>Padecimiento</th>
            <th>Fecha de la cita</th>
            <th>Hora de la cita</th>
            <th></th>
            <th></th>
        </tr>
        <tbody>
            <?php
            include 'php/connectionAlt.php';

            $nombreU = $_SESSION["usuario"]["nombre"];
            $apellidosU = $_SESSION["usuario"]["apellidos"];

            $consulta = "SELECT * FROM cita ORDER BY fechaCita ASC, horaCita ASC ";
            $resultado = $conn->query($consulta);

            while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td> <?php echo $row['nombreCliente']; ?> </td>
                    <td> <?php echo $row['apellidosCliente']; ?> </td>
                    <td> <?php echo $row['telefonoCliente']; ?> </td>
                    <td> <?php echo $row['nomMascota']; ?> </td>
                    <td> <?php echo $row['razaMascota']; ?> </td>
                    <td> <?php echo $row['generoMascota']; ?> </td>
                    <td> <?php echo $row['padecimiento']; ?> </td>
                    <td> <?php echo $row['fechaCita']; ?> </td>
                    <td> <?php echo $row['horaCita']; ?> </td>
                    <td> <a href="update-date.php?idCita=<?php echo $row['idCita']; ?>" style="color:#3B83BD;">Modificar</a> </td>
                    <td> <a href="php/deleteDateAdm.php?idCita=<?php echo $row['idCita']; ?>" style="color:#FF0000;">Cancelar</a> </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </center>

    <br>
    <br>

    <section id="top_banner">
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Realizar una Cita</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="titlebar">
            <div class="container">
                <section id="login-reg">
                    <div class="container">
                        <!-- Top content -->
                        <div class="row">
                            <div class="col-md-6 col-sm-12 forms-right-icons">
                                <img src="img/ad.jpg" width="90%" height="90%">
                            </div>
                            <!--forms-right-icons-->
                            <div class="col-md-6 col-sm-12">
                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3>Su salud es importante</h3>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form role="form" action="php/dateAdm.php" class="login-form" method="POST">
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="valNombreCliente" placeholder="Nombre del dueño" aria-describedby="basic-addon1" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="valApellidosCliente" placeholder="Apellidos del dueño" aria-describedby="basic-addon1" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                <input type="tel" name="valNoTelefono" class="form-control" placeholder="Número de teléfono" aria-describedby="basic-addon1" minlength="10" maxlength="10" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="valNombreMascota" placeholder="Nombre de la mascota" aria-describedby="basic-addon1" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                                                <select name="valRaza" >
                                                <option selected value="0"> Raza </option>
                                                    <optgroup label="Gato"> 
                                                    <option value="Gato Persa">Gato Persa</option> 
                                                    <option value="Azul ruso">Azul ruso</option> 
                                                    <option value="Maine Coon">Maine Coon</option>
                                                    <option value="Siamés">Siamés</option> 
                                                    <option value="Abisinio">Abisinio</option> 
                                                    <option value="Ragdoll">Ragdoll</option>
                                                    <option value="Otro">Otro</option>
                                                </optgroup> 
                                                <optgroup label="Perro"> 
                                                    <option value="Labrador Retriever">Labrador Retriever</option> 
                                                    <option value="Pastor Alemán">Pastor Alemán</option> 
                                                    <option value="Golden Retriever">Golden Retriever</option> 
                                                    <option value="Bulldog">Bulldog</option> 
                                                    <option value="Beagle">Beagle</option> 
                                                    <option value="Poodle">Poodle</option>
                                                    <option value="Otro">Otro</option>
                                                </optgroup> 
                                                </select>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                                                <select name="valGeneroMascota">
                                                <option selected value="Selecciona el genero"> Género de la mascota </option>
                                                <option value="Macho">Macho</option> 
                                                <option value="Hembra">Hembra</option>
                                                </select>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                <input type="number" step="any" class="form-control" name="valEdadMascota" placeholder="Edad de la mascota (meses)" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                <input type="number" class="form-control" name="valPesoMascota" placeholder="Peso de la mascota" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="form-group">
                                                <label>Padecimiento de la mascota</label>
                                                <textarea name="valPadecimiento" id="message" required="required" class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                                                <input type="date" class="form-control" name="valFechaCita" placeholder="Fecha de Cita" aria-describedby="basic-addon1" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                                                <input type="time" class="form-control" name="valHoraCita" placeholder="Hora" aria-describedby="basic-addon1" required>
                                            </div>
                                            <button type="submit" class="btn">Agendar</button>
                                        </form>
                                    </div>
                                </div>
            
                            </div> 
                        </div> 
                    </div> 
                </section>
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