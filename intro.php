<?php

require_once 'db conection.php';

$sys = $web->query("SELECT * FROM `wilayas`");

while($row = $sys->fetchAll()) {
  
  print_r ($row);
}

 ?>
