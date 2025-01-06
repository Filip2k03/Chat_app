<?php
  $hostname = "localhost";
  $username = "pmwengs_chatapp_talkprivate";
  $password = "M89d8LbZq!";
  $dbname = "pmwengs_chatapp_talkprivate";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>