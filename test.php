    <?php
     //specify the server name and here it is localhost
     $server_name = "localhost";

     //specify the username - here it is root
     $user_name = "root";

     //specify the password - it is empty
     $password = "";

     $database="details";

     // Creating the connection by specifying the connection details
     $con = mysqli_connect($server_name, $user_name, $password, $database);

     // Checking the  connection
     if (!$con) {
     die("Failed ". mysqli_connect_error());
      }
     echo "Connection established successfully";
     ?>
    
        












