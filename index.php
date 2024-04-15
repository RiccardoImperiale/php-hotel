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

/*
foreach ($hotels as $hotel) {
    $hotelName = $hotel['name'];
    $hotelDesc = $hotel['description'];
    $hotelPark = $hotel['parking'];
    $hotelVote = $hotel['vote'];
    $hotelDistToCenter = $hotel['distance_to_center'];
    $hotelPark ? $parking = 'has parking' : $parking = 'has no parking';
    
    echo "$hotelName ($hotelDesc): $hotelVote stars, $parking, is $hotelDistToCenter km from the center <br>";
}
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Hotels</h1>
        <table class="table table-striped w-75 m-auto">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $key => $hotel) : ?>
                    <tr>
                        <th scope="row"><?= $key ?></th>
                        <td><?= $hotel['name'] ?></td>
                        <td><?= $hotel['description'] ?></td>
                        <td><?= $hotel['parking'] ? 'Yes' : 'No' ?></td>
                        <td><?= $hotel['vote'] ?></td>
                        <td><?= $hotel['distance_to_center'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>