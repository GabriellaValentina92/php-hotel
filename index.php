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

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
</head>
<body>
    <!-- <?php foreach($hotels as $key => $hotelsDescriptions) {
            foreach($hotelsDescriptions as $key => $hotelsItems){ 
                echo $hotelsItems;
            }
        }
        ?> -->
    

    
        <div class="container" style="max-width: 1000px; margin: 20px auto;">
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Hotel</th>
                        <th scope="col">description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance from the City Center</th>
                    </tr>
                </thead>
                <tbody>
                    <tr <?php foreach($hotels as $key => $hotelsDescriptions) { 
                    ?>>
                        <th scope="row"> <?= $hotelsDescriptions['name'] ?> </th>
                        <td><?= $hotelsDescriptions['description'] ?></td>  
                        <td><?= $hotelsDescriptions['parking'] == 1 ? "YES" : "NO" ?></td> 
                        <td><?= $hotelsDescriptions['vote'] ?></td> 
                        <td><?= $hotelsDescriptions['distance_to_center'] ?> km </td>   
                    </tr>
                </tbody>
            </table> 
        </div>
        <?php 
    }?>

</body>
</html>