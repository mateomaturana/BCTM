<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/template.css" type="text/css"/>
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/jquery-ui.min.css"/>
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.3.2.0.css">-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">  
        <link rel="stylesheet" type="text/css" href="css/cms_styles.css">

        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/languajes/jquery.validationEngine-en.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery.validationEngine.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/script.js" charset="utf-8"></script>

    </head>
    <body style="padding-top: 100px;">        
        <div class="header">


            <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">BCTM</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php
                        if ((isset($_SESSION['fk_id_usuario']) && $_SESSION['fk_id_usuario'] == 1) || (isset($_SESSION['fk_id_usuario']) && $_SESSION['fk_id_usuario'] == 2)) {
                            ?>
                            <ul class="nav navbar-nav">

                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Comuna<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("comuna", "crearComuna"); ?>">Crear</a></li>

                                        <li><a href="<?php echo $helper->url("comuna", "admin"); ?>">Consultar</a></li>

                                    </ul>
                                </li>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Barrio<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("barrio", "crearBarrio"); ?>">Crear</a></li>

                                        <li><a href="<?php echo $helper->url("barrio", "admin"); ?>">Consultar</a></li>
                                        <li class="divider"></li>

                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Barrio Ruta <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo $helper->url("BarrioRuta", "crearBarrioRuta"); ?>">Crear</a></li>
                                                <li><a href="<?php echo $helper->url("BarrioRuta", "admin"); ?>">Consultar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Conductor<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("Conductor", "crearConductor"); ?>">Crear</a></li>
                                        <li><a href="<?php echo $helper->url("Conductor", "admin"); ?>">Consultar</a></li>

                                    </ul>
                                </li>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Controlador<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("Controlador", "crearControlador"); ?>">Crear</a></li>
                                        <li><a href="<?php echo $helper->url("Controlador", "admin"); ?>">Consultar</a></li>

                                    </ul>
                                </li>
                                <?php
                                if ((isset($_SESSION['fk_id_usuario']) && $_SESSION['fk_id_usuario'] == 1)) {
                                    ?>
                                    }
                                    <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Empresa<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $helper->url("Empresa", "crearEmpresa"); ?>">Crear</a></li>
                                            <li><a href="<?php echo $helper->url("Empresa", "admin"); ?>">Consultar</a></li>
                                            <li class="divider"></li>

                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notificaciones<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo $helper->url("NotificacionEmpresa", "crearNotificacionEmpresa"); ?>">Crear</a></li>

                                                    <li><a href="<?php echo $helper->url("NotificacionEmpresa", "admin"); ?>">Consultar</a></li>
                                                </ul>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rutas<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo $helper->url("RutaEmpresa", "crearRutaEmpresa"); ?>">Crear</a></li>

                                                    <li><a href="<?php echo $helper->url("RutaEmpresa", "admin"); ?>">Consultar</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                <?php } ?>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Ruta<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("Ruta", "crearRuta"); ?>">Crear</a></li>
                                        <li><a href="<?php echo $helper->url("Ruta", "admin"); ?>">Consultar</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recomendaciones<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo $helper->url("RecomendacionRuta", "crearRecomendacionRuta"); ?>">Crear</a></li>

                                                <li><a href="<?php echo $helper->url("RecomendacionRuta", "admin"); ?>">Consultar</a></li>
                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registro ruta<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo $helper->url("RegistroRuta", "crearRegistroRuta"); ?>">Crear</a></li>

                                                <li><a href="<?php echo $helper->url("RegistroRuta", "admin"); ?>">Consultar</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("SuperAdmin", "crearSuperAdmin"); ?>">Crear</a></li>

                                        <li><a href="<?php echo $helper->url("SuperAdmin", "admin"); ?>">Consultar</a></li>


                                    </ul>
                                </li>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("Usuario", "crearUsuario"); ?>">Crear</a></li>
                                        <li><a href="<?php echo $helper->url("Usuario", "admin"); ?>">Consultar</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ruta deseada<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo $helper->url("RutaDeseada", "crearRutaDeseada"); ?>">Crear</a></li>

                                                <li><a href="<?php echo $helper->url("RutaDeseada", "admin"); ?>">Consultar</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Vehiculo<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("Vehiculo", "crearVehiculo"); ?>">Crear</a></li>
                                        <li><a href="<?php echo $helper->url("Vehiculo", "admin"); ?>">Consultar</a></li>

                                    </ul>
                                </li>
                                <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Log-In<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $helper->url("Login", "Login"); ?>">Iniciar Sesion</a></li>
                                        <li><a href="<?php echo $helper->url("Usuario", "crearUsuario"); ?>">Registrarse</a></li>

                                    </ul>
                                </li>
                                <li><a  href="<?php echo $helper->url("Login", "logout"); ?>"  >Salir
                                        <?php
                                        if (isset($_SESSION['Email'])) {
                                            echo "(" . $_SESSION['Email'] . ")";
                                        }
                                        ?>
                                    </a>

                                </li>


                            </ul>
                        <?php } ?>

                    </div>
                </div>
            </nav>
        </div>

        <?php require_once 'view/' . $vista . '.php'; ?>
        <div class="footer"></div>
    </body>
</html>