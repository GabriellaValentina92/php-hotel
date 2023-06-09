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
    <?php /* foreach($hotels as $key => $hotelsDescriptions) {
            foreach($hotelsDescriptions as $key => $hotelsItems){ 
                echo $hotelsItems;
            }
        } */
    ?> 
    <div class="container" style="max-width: 1000px; margin: 20px auto;">
        <form action="" method="get" class="d-flex align-items-center">
            <label for="Parking" class="me-3"> Parking: </label>
            <select class="form-select w-25 me-3" id="Parking" aria-label="Default select example">
                <option selected>All</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
            </select>

            <label for="Ranking" class="me-3"> Hotel Ranking: </label>
            <select class="form-select w-25" id="Ranking" aria-label="Default select example">
                <option selected>All</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </form>
        <table class="table mt-4" style="border: 1px solid lightgrey;">
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
                <?php foreach($hotels as $key => $hotelsDescriptions) { 
                    ?>
                <tr>
                    <th scope="row"> <?= $hotelsDescriptions['name'] ?> </th>
                    <td><?= $hotelsDescriptions['description'] ?></td>  
                    <td><?= $hotelsDescriptions['parking'] == 1 ? "YES" : "NO" ?></td> 
                    <td><?= $hotelsDescriptions['vote'] ?></td> 
                    <td><?= $hotelsDescriptions['distance_to_center'] ?> km </td>   
                </tr>
                <?php } ?>
            </tbody>
        </table> 
    </div>

</body>
</html>