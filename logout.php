<?php 

session_start();

session_destroy();
header("location:login.php?mes=Your session is finished");






?>