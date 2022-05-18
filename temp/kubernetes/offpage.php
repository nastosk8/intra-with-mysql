<?php
   $servername = "mysql";
   $username = "root";
   $password = "AdpcA6211";
   $dbname = "webapp";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   else echo "connection sucessfull";