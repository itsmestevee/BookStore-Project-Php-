<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="CSS\edit.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="top-container">
            <h1>Admin Page</h1>
            <div class="logout"><a href="Query\Logout_Query.php"><i class="fa-solid fa-circle-user fa-2xl" style="color:white;"></i> Logout</a></div>
            <div class="addnew"><a href="AddData.php"><i class="fa-solid fa-plus"></i> Add new</a></div>
            
        </div>
    </header>
    
    <?php
        include 'DBconfig.php';

        $sql = "SELECT *
        FROM tblbooks b
        Inner JOIN tblcategories c ON b.ID = c.ID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Title</th><th>Author</th><th>Year</th><th>Price</th><th>Stock</th><th>Categories</th><th>Description</th><th>Image</th><th>Options</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ProductID"] . "</td>";
                echo "<td>" . $row["Title"] . "</td>";
                echo "<td>" . $row["Author"] . "</td>";
                echo "<td>" . $row["Year"] . "</td>";
                echo "<td>" ."$". $row["Price"] . "</td>";
                echo "<td>" . $row["Stock"] . "</td>";
                echo "<td>" . $row["Categories"] . "</td>";
                echo "<td>" . $row["Description"] . "</td>";
                echo "<td><img src='" . $row["Image"] . "' alt='Book Image'></td>";
                echo "<td><a href='UpdateData.php?id=".$row["ProductID"]."'><i class='fas fa-pen-to-square'></i>Edit</a><br><br><a href='Delete.php?id=".$row["ProductID"]."'><i class='fa-solid fa-trash'></i>Del</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
    ?>

    
</body>
</html>