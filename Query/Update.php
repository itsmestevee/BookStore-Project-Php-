<?php
include("../DBconfig.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['Title']);
    $author = mysqli_real_escape_string($conn, $_POST['Author']);
    $year = $_POST['Year'];
    $price = $_POST['price'];
    $stock = $_POST['Stock'];
    $category = $_POST['Catg'];
    $description = mysqli_real_escape_string($conn, $_POST['Desc']);

    $updateQuery = "UPDATE tblbooks SET
                    Title = '$title',
                    Author = '$author',
                    Year = '$year',
                    Price = '$price',
                    Stock = '$stock',
                    ID = '$category',
                    Description = '$description'
                    WHERE ProductID = $id";

    if (mysqli_query($conn, $updateQuery)) {
        header("Location: ../Edit.php");
        
    } else {
        echo "Error updating record: " . mysqli_error($conn);
        echo $updateQuery;
    }
}

mysqli_close($conn);
?>
