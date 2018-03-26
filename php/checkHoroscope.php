<?php 
//January - February
    $horoScope [] = [
        'title' => 'Aquarius',
        'dateStart' => '0120',
        'dateEnd' => '0218',
        'image' => '<img src="img/aquarius.png" id="horoScopePicture""/>',
    ];
//February - March
    $horoScope [] = [
        'title' => 'Pisces',
        'dateStart' => '0219',
        'dateEnd' => '0320',
        'image' => '<img src="img/pisces.png" id="horoScopePicture"/>',
    ];
//March - April
    $horoScope [] = [
        'title' => 'Aries',
        'dateStart' => '0321',
        'dateEnd' => '0419',
        'image' => '<img src="img/aries.png" id="horoScopePicture"/>',
    ];
//April - May
    $horoScope [] = [
        'title' => 'Taurus',
        'dateStart' => '0420',
        'dateEnd' => '0520',
        'image' => '<img src="img/taurus.png"/ id="horoScopePicture">',
    ];
//May - June
    $horoScope [] = [
        'title' => 'Gemini',
        'dateStart' => '0521',
        'dateEnd' => '0620',
        'image' => '<img src="img/gemini.png" id="horoScopePicture"/>',
    ];
//June - July
    $horoScope [] = [
        'title' => 'Cancer',
        'dateStart' => '0621',
        'dateEnd' => '0722',
        'image' => '<img src="img/cancer.png" id="horoScopePicture"/>',
    ];
//July - August
    $horoScope [] = [
        'title' => 'Leo',
        'dateStart' => '0723',
        'dateEnd' => '0822',
        'image' => '<img src="img/leo.png" id="horoScopePicture"/>',
    ];
//August - September
    $horoScope [] = [
        'title' => 'Virgo',
        'dateStart' => '0823',
        'dateEnd' => '0922',
        'image' => '<img src="img/virgo.png" id="horoScopePicture"/>',
    ];
//September - October
    $horoScope [] = [
        'title' => 'Libra',
        'dateStart' => '0923',
        'dateEnd' => '1022',
        'image' => '<img src="img/libra.png" id="horoScopePicture"/>',
    ];
//October - November
    $horoScope [] = [
        'title' => 'Scorpio',
        'dateStart' => '1023',
        'dateEnd' => '1121',
        'image' => '<img src="img/scorpio.png" id="horoScopePicture"/>',
    ];
//November - December
    $horoScope [] = [
        'title' => 'Sagittarius',
        'dateStart' => '1122',
        'dateEnd' => '1221',
        'image' => '<img src="img/sagittarius.png" id="horoScopePicture"/>',
    ];
//December for Capricorn
    $horoScope [] = [
        'title' => 'Capricorn',
        'dateStart' => '1222',
        'dateEnd' => '1231',
        'image' => '<img src="img/capricorn.png" id="horoScopePicture"/>',
    ];
//January for Capricorn
    $horoScope [] = [
        'title' => 'Capricorn',
        'dateStart' => '0101',
        'dateEnd' => '0119',
        'image' => '<img src="img/capricorn.png" id="horoScopePicture"/>',
    ];
//Function for see correct horoscope
    function getHoroscope($horoScope, $date, $lastDate){
        foreach($horoScope as $item){
            if($lastDate >= $item['dateStart'] && $lastDate <= $item['dateEnd']){
                $title = $item['title'];
                $horoscopeCard = "<h2>$title</h2>" . $item['image'];

                return $horoscopeCard;
            }
        }
    }

?>