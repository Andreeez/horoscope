<?php
function checkHoroscope($persnr){
    //mars månad
 if($persnr[2] . $persnr[3] == 03){
    if($persnr[4] . $persnr[5] >= 21){
        $horoscope = "<img src='./img/aries.png'><h2>Väduren</h2><p>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv.<br/> 
        Element: Eld 🔥</p>";
    }
    else if($persnr[4] . $persnr[5] < 21){
        $horoscope = "<img src='./img/pisces.png'><h2>Fiskarna</h2><p>Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande.<br/> 
        Element: Vatten 🌊</p>";
    }   
}

    if($persnr[2] . $persnr[3] > 12 && $persnr[4] . $persnr[5] < 31){
        echo false;
    }
return $horoscope;
 
}
?>
