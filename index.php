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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container w-75 m-auto mt-5">
        <h1 class="text-center ">Hotels</h1>
        <!-- form -->
        <form action="" method="get" class="my-5">
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="parking" name="parking" <?= isset($_GET['parking']) ? 'checked' : '' ?>>
                <label class="form-check-label" for="parking">Has Parking</label>
            </div>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
        <!-- table -->
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $key => $hotel) : ?>
                    <?php if (isset($_GET['parking']) && $hotel['parking']) { ?>
                        <tr>
                            <th scope="row"><?= $key ?></th>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= 'Yes' ?></td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] . ' km' ?></td>
                        </tr>
                    <?php } else if (!isset($_GET['parking'])) { ?>
                        <tr>
                            <th scope="row"><?= $key ?></th>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= $hotel['parking'] ? 'Yes' : 'No' ?></td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] . ' km' ?></td>
                        </tr>
                    <?php } ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>