<?php
       $img = $_FILES["image"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "Images/".$imgU;
        move_uploaded_file($_FILES['image']['tmp_name'],$path);
        $indate = date('Y/m/d H:m:s');

      include ('DBconfig.php');
 
        $queryAdd = 'Insert into tblbooks (ID, Author, Year, Title, Price, Description, Stock, Image, Datein) Values("'.$_POST["Catg"].'", "'.$_POST["Author"].'", "'.$_POST["Year"].'", "'.$_POST["Title"].'", "'.$_POST["price"].'","'.$_POST["Desc"].'","'.$_POST["Stock"].'","'. $path .'","'. $indate .'")';

        if (mysqli_query($conn, $queryAdd)) {
          header("Location: UpdateData.php");   
        } 
        else 
          echo "Error: " . $queryAdd . "<br>" . mysqli_error($conn);
        echo 'Thank You!!!';
        $conn->close();
  ?>
