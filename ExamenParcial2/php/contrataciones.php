<?php
// Iniciar o reanudar una sesión
session_start();

// Verificar si hay una sesión activa
if (isset($_SESSION["usuario"])) {
    $sesionActiva = false;
} else {
    $sesionActiva = true;
}

?>
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
                <li><a class="" href="../Servicios.php">Servicios</a></li>
                <li><a class="" href="../contacto.php">Contacto</a></li>
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
        <div >
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    
                       
                       <?php
                    if($sesionActiva){
                        echo 
                        '<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right mt-2">
                           <li class="px-3 py-2">
                        <form class="form" role="form" action="php/login.php" method="post">
                                <div class="form-group">
                                    <input name="usuario" id="emailInput" placeholder="Usuario" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input name="pass" id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-center">
                            
                            
                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a></small>
    
                        </div>
                            </form>';
                        } else {
                            echo '<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">'.$_SESSION["usuario"].' <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right mt-2">
                               <li class="px-3 py-2">
                            <form class="form" role="form" action="php/login.php" method="post">
                            <div class="form-group text-center">
                                    
                            <small><a href="php/logout.php" id="cerrar_sesion">Cerrar sesion</a></small>
    
                        </div>
                    </form>';
                        }
                        ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div> 
    </section>
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="row">

        <div class="col-md-6" style="background-color: #8899e5; color: black; padding-top: 30px;padding-bottom: 30px; border-radius: 30px; padding-left: 40px;padding-right: 40px;">
            <div class="contact-form">
                <h2 style="font-size: 25px;font-weight: 700;text-align: center;">Formulario de Admición</h2>
                <form action="procesar2.php" method="post" enctype="multipart/form-data">
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
                        <input type="number" class="form-control" id="telefono" name="telefono" require>
                    </div><br>
                    <label class="h6" for="ingles_no" >Ingles</label><br>
                    <div class="container">
                        <div class="row">
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="ingles" id="ingles_si" value="Si">
                                <label class="form-check-label" for="ingles_si">Si</label>
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="ingles" id="ingles_no" value="No">
                                <label class="form-check-label" for="ingles_no">No</label>
                            </div> 
                        </div>
                    </div>
                    <label class="h6" >Disponibilidad para viajar</label><br>
                    <div class="container">
                        <div class="row">
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="viajar" id="viajar_si" value="Si">
                                <label class="form-check-label" for="ingles_si">Si</label>
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="viajar" id="viajar_no" value="No">
                                <label class="form-check-label" for="viajar_no">No</label>
                            </div> 
                        </div>
                    </div>
                    <label class="h6" for="puesto">Puesto al que aplicas</label>
                    <select name="puesto" id="puesto" class="form-select" require>
                        <option selected>Puesto</option>
                        <option value="front">Front-end</option>
                        <option value="back">Back-end</option>
                        <option value="full">Full Stack</option>
                        <option value="diseno">Diseñador</option>
                        <option value="base_datos">Admin BD</option>
                        <option value="gerente">Gerente</option>
                        <option value="contador">Contador</option>
                        <option value="tester">Tester</option>
                    </select>

                    <br>
                    <label class="h6">Lenguajes y/o frameworks que manejas:</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="java" id="java" name="lenguajes[]">
                        <label class="form-check-label" for="Java">Java</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="c" id="c" name="lenguajes[]">
                        <label class="form-check-label" for="c">C</label>
                    </div>    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="c++" id="cmas" name="lenguajes[]">
                        <label class="form-check-label" for="cmas">C++</label>
                    </div>    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="phyton" id="phyton" name="lenguajes[]">
                        <label class="form-check-label" for="phyton">Phyton</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="javascript" id="javascript" name="lenguajes[]">
                        <label class="form-check-label" for="javascript">Javascript</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="react" id="react" name="lenguajes[]">
                        <label class="form-check-label" for="react">React</label>
                    </div>    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="html" id="html" name="lenguajes[]">
                        <label class="form-check-label" for="html">HTML</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="bootstrap" id="bootstrap" name="lenguajes[]">
                        <label class="form-check-label" for="bootstrap">Bootstrap</label>
                    </div>                           
                    <div class="form-group">
                        <label for="file">Subir tu foto</label>    
                        <input type="file" name="file" id="file" class="form-control-file">
                    </div><br>
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
                <p class="h3" style="color: white;">¿Ya  tienes tu clave de acceso? !Inicia el examen de selecion¡</p>
                <a href="examen.php" style="color: red;">!Inicia tu examen¡</a>    
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