<?php

class Movie{
  public $genre;
  public $year;
}

$Moonlight = new Movie ();
$Moonlight -> genre = "Drama";
$Moonlight -> year = 2016;

$Inception = new Movie ();
$Inception -> genre = "Action";
$Inception -> year = 2010;

var_dump($Moonlight);
var_dump($Inception)
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
    <h1> <?php echo $Moonlight -> genre ?> </h1>
</body>
</html>