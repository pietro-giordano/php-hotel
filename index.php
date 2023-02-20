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
      <title>PHP Hotel</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

      <div class="container">
            <div class="row mt-3">

                  <?php foreach ($hotels as $hotel) {
                        echo '<table class="table table-info">';
                        foreach ($hotel as $key => $hotelData) {
                              echo '<tr>';
                              if ($key == 'name') {
                                    echo '<th>' . $key . '</th>';
                                    echo '<th>' . $hotelData . '</th>';
                              } else {
                                    echo '<td>' . $key . '</td>';
                                    echo '<td>' . $hotelData . '</td>';
                              }
                              echo '</tr>';
                        }
                        echo '</table>';
                  } ?>

            </div>
      </div>

</body>

</html>