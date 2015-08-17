<?php
	define("DB_SERVER", "your_host_location");
  define("DB_USER", "your_username");
  define("DB_PASS", "your_password");
  define("DB_NAME", "your_databse_name");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
