<?php

      include ('../DBconfig.php');
 
        $queryAdd = 'Insert into tbluser (username, password, Email) Values("'.$_POST["username"].'", "'.$_POST["password"].'", "'.$_POST["email"].'")';

        if (mysqli_query($conn, $queryAdd)) {
          header("Location: ../Login.php"); 
        } 
        else 
          echo "Error: " . $queryAdd . "<br>" . mysqli_error($conn);
        echo 'Thank You!!!';
        $conn->close();
  ?>