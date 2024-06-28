<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $visible="";

    $parcheggio=$_GET["parcheggio"];

    $hotelBuono=$_GET["stelle"];

    $controllo=false;

    var_dump($parcheggio);


    for($i=0; $i<count($hotels); $i++){

        $hotel=$hotels[$i];

        $parking=$hotel["parking"];

        $voto=$hotel["vote"];

        var_dump($parking);

        if($parcheggio == "1" && $parking == false){
            $visible="invisible";

        }elseif($parcheggio !== "1" && $parking !== false){
            $visible="visible";

        };

        if($hotelBuono == "1" && $voto >= 3){
            $visible="invisible";

        }elseif($hotelBuono !== "1" && $voto <= 3){
            $visible="visible";

        };
    



    }



?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
 
    <title>Hotel-php</title>
</head>
<body>

    <main>


    <form action="./index.php" method="GET">

        <label for="parcheggio">ha il parcheggio</label>
        <input type="checkbox" name="parcheggio" id="parcheggio" value="1">

        <label for="stelle">con 3 stelle o più</label>
        <input type="checkbox" name="stelle" id="stelle" value="1">

        <button type="submit">invia</button>

    </form>

        <div class="container"> 
            <table class="table"><?php foreach($hotels as $hotel) {?>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col <?php echo $visible?>"> <?php echo $hotel["name"] ?> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" >1</th>
                    <td class="<?php echo $visible?>"> <?php echo $hotel["description"] ?> </td>
                    </tr>
                    <tr >
                    <th scope="row">2</th>
                    <td class="<?php echo $visible?>"> <?php echo $hotel["vote"] ?> </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="<?php echo $visible?>"> <?php echo $hotel["distance_to_center"] ?> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
       
        </div>
    </main>
        
</body>
</html>

