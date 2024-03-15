<?php
    require_once 'DBconfig.php';

    $sql = 'SELECT * from tblBooks';
    $all_product = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\PopularTab.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-book">
        <h1 class="Book-Title">សៀវភៅពេញនិយម</h1>
        <div class="book-content">
        <?php

            include('DBconfig.php');
                $qw = 'SELECT * FROM tblbooks Order By DateIn ASC Limit 10';
                $rw = $conn->query($qw);

            if ($rw->num_rows > 0) { ?>
                <?php while ($row = $rw->fetch_assoc()) { ?>
                    <div class="box-book">
                        <a href="View.php?fdId=<?= $row["ProductID"] ?>">
                        <div class="image-container"><img class="img-cover" src="<?php echo $row["Image"]; ?>" alt="Book Cover"></div>
                        <div class="Title"><?php echo $row["Title"]; ?></div>
                        <div class="Author">By: <?php echo $row["Author"]; ?></div>
                        <div class="price">$<?php echo $row["Price"]; ?></div>

                    </div>
                            <?php } ?>
            <?php } else
                echo '0 results';
            $conn->close();
        ?>
        <div class="more-books">
            <a href="./Explore.php"><i class="fa-solid fa-arrow-right fa-2xl"></i></a>
        </div>
        </div>
    </div>
</body>
</html>