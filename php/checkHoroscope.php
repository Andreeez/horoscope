<?php 
    $horoScope [] = [
        'title' => 'Aquarius',
        'dateStart' => '0120',
        'dateEnd' => '0218',
        'image' => '<img src="img/vattumannen.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Pisces',
        'dateStart' => '0219',
        'dateEnd' => '0320',
        'image' => '<img src="img/fiskarna.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Aries',
        'dateStart' => '0321',
        'dateEnd' => '0419',
        'image' => '<img src="img/väduren.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Taurus',
        'dateStart' => '0420',
        'dateEnd' => '0520',
        'image' => '<img src="img/oxen.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Gemini',
        'dateStart' => '0521',
        'dateEnd' => '0620',
        'image' => '<img src="img/tvillingarna.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Cancer',
        'dateStart' => '0621',
        'dateEnd' => '0722',
        'image' => '<img src="img/kräftan.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Leo',
        'dateStart' => '0723',
        'dateEnd' => '0822',
        'image' => '<img src="img/lejonet.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Virgo',
        'dateStart' => '0823',
        'dateEnd' => '0922',
        'image' => '<img src="img/jungfrun.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Virgo',
        'dateStart' => '0923',
        'dateEnd' => '1022',
        'image' => '<img src="img/vågen.PNG"/>',
    ];

    
    $horoScope [] = [
        'title' => 'Scorpio',
        'dateStart' => '1023',
        'dateEnd' => '1121',
        'image' => '<img src="img/skorpionen.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Sagittarius',
        'dateStart' => '1122',
        'dateEnd' => '1221',
        'image' => '<img src="img/skytten.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Capricorn',
        'dateStart' => '1222',
        'dateEnd' => '1231',
        'image' => '<img src="img/stenbocken.PNG"/>',
    ];

    $horoScope [] = [
        'title' => 'Capricorn',
        'dateStart' => '0101',
        'dateEnd' => '0119',
        'image' => '<img src="img/stenbocken.PNG"/>',
    ];

 

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