<?php
//Functions for show horoscope
    session_start();
    include 'checkHoroscope.php';
    
     if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        if (isset($_SESSION["horoscope"])){
            echo $_SESSION["horoscope"];
            
        }
    }
    
?>