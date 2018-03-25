<?php
    session_start();

    include 'checkHoroscope.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $date = substr($_POST["personNumber"] == 6);
        $lastDate = $date[2] . $date[3] . $date[4] . $date[5];

            if(!isset($_SESSION['horoscope'])){
                $_SESSION['horoscope'] = getHoroscope($horoScope, $date, $lastDate);
                echo $_SESSION['horoscope'];
             
            } else {
                echo "This is So Wrong";
            }   
    }

?>