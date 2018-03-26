<?php
session_start();
include 'checkHoroscope2.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(strlen($_POST['personNR']) == 6){ //kollar att antalet inskriva siffror är 6
    $persnr = $_POST['personNR'];
    }
        if(!isset($_SESSION['horoscope'])){
            echo true;
            $_SESSION['horoscope'] = checkHoroscope($persnr);
        }
        else {
           echo false;
        }
        
    }
?>