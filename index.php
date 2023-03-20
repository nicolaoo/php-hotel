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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>
    <div>
        <?php
            foreach($hotels as $hotel_data){
                foreach($hotel_data as $key => $value){
                    ?>
                        <ul>

                            <li>
                                <?php

                                    echo $hotel_data["name"];
                                    ?>
                                <ul>
                                    <li>
                                        <?php
                                            echo $value;
                                            ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    <?php
                    
                }
            }

        ?>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <?php
                    foreach($hotels as $hotel){
                        ?>
                            <th>
                                <?php
                                   echo $hotel;
                                ?>
                            </th>
                        <?php
                    }
                ?>
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach($hotels as $hotel){
                        foreach($hotel as $key => $value)
                        ?>
                            <tr>
                                <th>
                                    <?php
                                        echo $hotel["name"];
                                    ?>

                                </th>
                                <th>
                                    <?php
                                        echo $hotel["description"];
                                    ?>

                                </th>
                                <th>
                                    <?php
                                        echo $hotel["parking"];
                                    ?>

                                </th>
                                <th>
                                    <?php
                                        echo $hotel["vote"];
                                    ?>

                                </th>
                                <th>
                                    <?php
                                        echo $hotel["distance_to_center"];
                                    ?>

                                </th>
                            </tr>
                        <?php
                    }
                ?>
        </tbody>
    </table>

</body>
</html>

