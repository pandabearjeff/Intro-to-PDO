<?php

//1
ini_set('display_errors', 'on'); //2

$db = new PDO('sqlite:./database.db'); //3
// strange problem is no matter what I put after the 'sqlite:./' I still get the correct var_dump and it does not catch the error for the wrong database file searched for. 

var_dump($db);
die();

?> 


<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>PHP Data Objects</title>
  <link rel="stylesheet" href="style.css">

</head>

<body id="home">

  <h1>Sakila Sample Database</h1>

  <h2>Films by Title</h2>

  <ol>
      <li><i class="lens"></i>Film One</li>
      <li><i class="lens"></i>Film Two</li>
      <li><i class="lens"></i>Film Three</li>
      <li><i class="lens"></i>Film Four</li>
  </ol>

</body>

</html>




