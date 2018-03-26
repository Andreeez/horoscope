<?php
//Delete functions
    session_start();
    include 'checkHoroscope.php';

    if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
        if(isset($_SESSION["horoscope"])){
            session_unset();
        }
    }
?>