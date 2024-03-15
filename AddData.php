<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="CSS\AddData.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>
<body>
    <?php include "Inc_Files\Navbar.php" ?>

    <div class="signup-container">
        <h1 id="Title_form">Add Data To SQL</h1>
        <a href="edit.php" class="Home">Back Home</a>
        <form action="Upload.php" method="post" enctype="multipart/form-data">
        <div class="cols">
            <label for="Title">Book's Title:</label>
            <input type="text" name="Title" id="Title"><br>
            <label for="Author">Book's Author:</label>
            <input type="text" name="Author" id="Author"><br>
            <label for="Year">Book's Year:</label>
            <input type="text" name="Year" id="Year"><br>
            <label for="Price">Book's Price:</label>
            <input type="text" name="price" id="price"><br>
            <label for="Stock">Stock:</label>
            <input type="text" name="Stock" id="Stock"><br>
        </div>
        <div class="cols">
            <label for="Categories">Categories:</label>
            <?php
                    include ("DBconfig.php");

                    $Catgq = 'Select * from tblcategories;';
                    $rft = mysqli_query($conn, $Catgq);
                    if ($rft->num_rows > 0)
                    {
                    echo '<select name="Catg" >';
                        while($roft = $rft->fetch_assoc())
                    echo ('"<option value="'.$roft["ID"].'">'.$roft["Categories"].'</option>"');
                    echo '</select>';
                    }
                    else 
                        echo "0 results";
              ?><br>
            <label for="image">Select Image:</label>
            <input type="file" name="image" id="image"><br>
            <label for="Desc">Description:</label>
            <textarea name="Desc" rows="10" cols="30"></textarea><br>
            <input type="submit" value="Upload Data" name="submit">
        </div>
        
        </form>
    </div>
</body>
    
</body>
</html>