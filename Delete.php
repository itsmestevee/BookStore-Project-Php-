<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/delete.css">
</head>
<body>
    <?php
        include 'DBconfig.php';
        $sfId = $_GET['id'];
        $qwAll = "SELECT * FROM tblbooks WHERE ProductID=".$sfId;
        $rwAll = $conn->query($qwAll);
        $row = $rwAll->fetch_assoc();
    ?>
    <div class="wrapper">
        <div class="addnew">
            <form action="Query\Del.php" method="post" enctype="multipart/form-data">
                <h1>Are You sure you want to delete this Info?</h1>
                <input type="hidden" value="<?php echo $row['ProductID']?>" name="ProdID">
                <h1>Title: <?php echo $row['Title']?></h1>
                <?php 
                    echo $qwAll;
                ?>
                <input type="submit" value="Delete Data" name="submit">
                <a href="Edit.php" class="cancel-link">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>