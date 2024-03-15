<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\NewArrivalTab.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="Arrival-container">
        <h1 class="Arrival-Tittle">មកដល់​ថ្មី</h1>

        <?php
            include 'DBconfig.php';

            $query = 'SELECT * FROM tblbooks Order by Datein Desc LIMIT 4';
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                ?>
                <div class="Arrival-content">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="Arrival-box">
                            <a href="View.php?fdId=<?= $row["ProductID"] ?>">
                                <h1>New</h1>
                                <img src="<?= $row["Image"]; ?>" alt="">
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            } else {
                echo '0 results';
            }

            $conn->close();
        ?>
        </div>

    </div>

</body>
</html>