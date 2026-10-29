<?php

  $mysqli = new mysqli("localhost","db2425687","ManUnited123#","db2425687");

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

?>