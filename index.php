<?php

//1
ini_set('display_errors', 'on'); //2

try {
  $db = new PDO('sqlite:./database.db'); //3
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //5 so here you want to tell the browser that no matter what the exception is you want to throw an exception. We are setting the attribute to Error reporting and setting the mode to Throw exceptions. 
  //4 
  var_dump($db);
  die();
} catch(Exception $e) {
  echo $e->getMessage();
  die(); 
}


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


