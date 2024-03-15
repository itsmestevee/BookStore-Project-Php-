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
    <?php include "Inc_Files\Navbar.php" ?>

    <?php
        include("DBconfig.php");

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $selectQuery = "SELECT * FROM tblbooks WHERE ProductID = $id";
            $result = mysqli_query($conn, $selectQuery);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <div class="signup-container">
                    <h1 id="Title_form">Update Data in SQL</h1>
                    <a href="Edit.php" class="Home">Back Home</a>
                    <form action="Query/Update.php" method="post" enctype="multipart/form-data">
                        <div class="cols">
                            <label for="Title">Book's Title:</label>
                            <input type="text" name="Title" id="Title" value="<?= $row['Title'] ?>"><br>
                            <label for="Author">Book's Author:</label>
                            <input type="text" name="Author" id="Author" value="<?= $row['Author'] ?>"><br>
                            <label for="Year">Book's Year:</label>
                            <input type="text" name="Year" id="Year" value="<?= $row['Year'] ?>"><br>
                            <label for="price">Book's Price:</label>
                            <input type="text" name="price" id="price" value="<?= $row['Price'] ?>"><br>
                            <label for="Stock">Stock:</label>
                            <input type="text" name="Stock" id="Stock" value="<?= $row['Stock'] ?>"><br>
                        </div>
                        <div class="cols">
                            <label for="Catg">Categories:</label>
                            <?php
                            $categoriesQuery = "SELECT * from tblcategories";
                            $categoriesResult = mysqli_query($conn, $categoriesQuery);

                            if ($categoriesResult->num_rows > 0) {
                                echo '<select name="Catg">';
                                while ($roft = $categoriesResult->fetch_assoc()) {
                                    echo '<option value="' . $roft["ID"] . '"';
                                    if ($roft["ID"] == $row["ID"]) {
                                        echo ' selected';
                                    }
                                    echo '>' . $roft["Categories"] . '</option>';
                                }
                                echo '</select>';
                            } else {
                                echo '0 results';
                            }
                            ?>
                            <label for="image">Selected Image:</label>
                            <img src="<?= $row['Image'] ?>" alt="" height="100px" width="110px">
                            <label for="Desc">Description:</label>
                            <textarea name="Desc" rows="10" cols="30"><?= $row['Description'] ?></textarea><br>
                            <input type="hidden" name="id" value="<?= $row['ProductID'] ?>">
                            <input type="submit" value="Update Data" name="submit">
                        </div>
                    </form>
                </div>
                <?php
            } else {
                echo 'Data not found for the specified ID.';
            }
        } else {
            echo 'ID not provided in the URL.';
        }
    ?>
</body>
</html>