<?php
session_start();
include 'checkHoroscope3.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $date = substr($_POST["personNumber"], 0, 6);
   $fourLastNr = $date[2] . $date[3] . $date[4] . $date[5];
    if(!isset($_SESSION['horoscope'])){
        $_SESSION['horoscope'] = getSign($signs, $date, $fourLastNr);
        echo  $_SESSION['horoscope'];
    }else{
    echo "error";
    }
}
?>