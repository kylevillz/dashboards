<?php

try {
  $pdo = new PDO('mysql:host=localhost;dbname=te4','root','');

  // echo "connection succesful";
} catch (PDOException $e) {

  echo $e->getmessage();

}

 ?>
