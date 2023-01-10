<?php
require_once __DIR__ ."/classes/movie.php";

$movies =[ 
  new Movie("Moonlight", ["Drama", "Action"], 180),
  new Movie ("Inception", ["Action"], 210),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
</head>
<body>
   <h1>Film da vedere:</h1> 
   <ul>
      <?php foreach($movies as $movie) { ?>
      <li>
        <h3><?= $movie-> title; ?></h3>
        <h4>Durata:<?php echo $movie-> duration; ?> minuti</h4>
        <h4>Genere: </h4>
        <ul> 
          <?php foreach($movie-> genres as $genre ) { ?>
          <li><?php echo ucfirst($genre); ?></li>
          <?php } ?>
        </ul> 
      </li>
      <?php } ?>
   </ul>
</body>
</html>