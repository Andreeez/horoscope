<?php



    $horoScope [] = [
        'title' => 'Aquarius',
        'dateStart' => '0120',
        'dateEnd' => '0218',
        'image' => '<img src="img/vattumannen.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Pisces',
        'dateStart' => '0219',
        'dateEnd' => '0320',
        'image' => '<img src="img/fiskarna.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Aries',
        'dateStart' => '0321',
        'dateEnd' => '0419',
        'image' => '<img src="img/väduren.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Taurus',
        'dateStart' => '0420',
        'dateEnd' => '0520',
        'image' => '<img src="img/oxen.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Gemini',
        'dateStart' => '0521',
        'dateEnd' => '0620',
        'image' => '<img src="img/tvillingarna.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Cancer',
        'dateStart' => '0621',
        'dateEnd' => '0722',
        'image' => '<img src="img/kräftan.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Leo',
        'dateStart' => '0723',
        'dateEnd' => '0822',
        'image' => '<img src="img/lejonet.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Virgo',
        'dateStart' => '0823',
        'dateEnd' => '0922',
        'image' => '<img src="img/jungfrun.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Virgo',
        'dateStart' => '0923',
        'dateEnd' => '1022',
        'image' => '<img src="img/vågen.png"/>',
    ];

    
    $horoScope [] = [
        'title' => 'Scorpio',
        'dateStart' => '1023',
        'dateEnd' => '1121',
        'image' => '<img src="img/skorpionen.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Sagittarius',
        'dateStart' => '1122',
        'dateEnd' => '1221',
        'image' => '<img src="img/skytten.png"/>',
    ];

    $horoScope [] = [
        'title' => 'Capricorn',
        'dateStart' => '1222',
        'dateEnd' => '0119',
        'image' => '<img src="img/stenbocken.png"/>',
    ];

 

    function getHoroscope($horoScope, $date, $lastDate){
        foreach($horoScope as $item){
            if($lastDate >= $item['dateStart'] && $lastDate <= $item['dateEnd']){
                $title = $item['title'];
                $horoscopeCard = "<h2>$title</h2>";

                return $horoscopeCard;
            }
        }
    }

?>