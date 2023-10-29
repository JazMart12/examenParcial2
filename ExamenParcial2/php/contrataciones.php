
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrataciones</title>
    <script src="https://kit.fontawesome.com/e674bba739.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../../imagenes/logo-ConvertImage.ico">

</head>
<body style="background-color: #222;">
    <?php 
    session_start();
    if (empty($_SESSION["usuario"])) {
        # Lo redireccionamos al formulario de inicio de sesión
        header("Location: ../index.php");
        # Y salimos del script
        exit();
    }
    ?> 
    <section id="header">
        <div class="navbar-title">
            <h3 class="title-first-name" style="font-weight: 900; font-size: 40px;">
                Code
            </h3>
            <h3 class="title-last-name" style="font-weight: 900; font-size: 40px;">
                Crafters
            </h3>
        </div>
        <div>
            <ul class="navbar-menu">
                <li><a class="" href="../index.php">Inicio</a></li>
                <li><a class="" href="../Servicios.html">Servicios</a></li>
                <li><a class="" href="../contacto.html">Contacto</a></li>
                <li><a class="active" href="contrataciones.php">&lt; Contrataciones &gt;</a></li>
            </ul>
        </div>
        <div>
            <ul class="social-media">
                <li>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <a href="#" target="_blank">LinkedIn</a>
                </li>
                <li>
                    <i class="fa-brands fa-github"></i>
                    <a href="#" target="_blank">Github</a>
                </li>
            </ul>
        </div> 
    </section>
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="row">

        <div class="col-md-6" style="background-color: #8899e5; color: black; padding-top: 30px;padding-bottom: 30px; border-radius: 30px; padding-left: 40px;padding-right: 40px;">
            <div class="contact-form">
                <h2 style="font-size: 25px;font-weight: 700;text-align: center;">Formulario de Admición</h2>
                <form action="formulario_contactanos.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <label for="apellido_m">Apellido Materno:</label>
                        <input type="text" class="form-control" id="apellido_m" name="apellido1" require>
                        <label for="apellido_p">Apellido Paterno:</label>
                        <input type="text" class="form-control" id="apellido_p" name="apellido2" require>
                    </div>
                    <div class="form-group container">
                        <div class="row">
                            <label for="dia">Fecha de nacimiento</label>
                            <div class="col">
                                <select name="dia" id="dia"class="form-select" require style="width: 80px;">
                                    <option selected >Dia</option>
                                    <?php 
                                    for($i=1;$i<=31;$i++){
                                        echo '<option value="' . $i . '">' . $i . '</option>';                            }
                                    ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="mes" id="mes" class="form-select" style="width: 140px;" require>
                                    <option selected>Mes</option>
                                    <option value="Enero">Enero</option>
                                    <option value="Febrero">Febrero</option>
                                    <option value="Marzo">Marzo</option>
                                    <option value="Abril">Abril</option>
                                    <option value="Mayo">Mayo</option>
                                    <option value="Junio">Junio</option>
                                    <option value="Julio">Julio</option>
                                    <option value="Agosto">Agosto</option>
                                    <option value="Septiembre">Septiembre</option>
                                    <option value="Octubre">Octubre</option>
                                    <option value="Noviembre">Noviembre</option>
                                    <option value="Diciembre">Diciembre</option>
                                </select>
                            </div>
                            <div class="col">
                            <select name="anio" id="anio"class="form-select" require style="width: 100px;">
                                    <option selected >Año</option>
                                    <?php 
                                    for($i=1990;$i<=2023;$i++){
                                        echo '<option value="' . $i . '">' . $i . '</option>';                            }
                                    ?>
                                </select>
                            </div>                                        
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-info">
                <h2 style="font-weight: 800;">¿Quiéres unirte a nuestro equipo?</h2>
                <br>
                <p>¡LLena este formulario para poder hacer el examen de selección!.</p>
                <br>
                <p>Dudas y aclaraciones</p>
                
                <ul>
                    <li style="color: white;"><i class="fa fa-envelope" style="color: white;"></i>  codecrafters@gmail.com</li>
                    <br>
                    <li style="color: white;"><i class="fa fa-phone" style="color: white;"></i>  +52 465-200-1232</li>
                    <br>
                    <li style="color: white;"><i class="fa-solid fa-globe"  style="color: white;"></i>  Avenida Universidad 940, Ciudad Universitaria, Universidad Autónoma de Aguascalientes, 20100 Aguascalientes, Ags.</li>
                </ul>
            </div>
        </div>
    </div>
</div>     
</body>
</html>