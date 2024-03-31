<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\Style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
    <?php include "Inc_Files\Navbar.php" ?>
    <?php include "Inc_Files\Header.php" ?>
    </div>
    <div class="wrapper">
        <div class="category-container">
            <?php include "Inc_Files\Categories.php" ?>
        </div>
        <div class="banner-container">
            <?php include "Inc_Files\Banner.php" ?>
        </div>
        <div class="side-content-container">
            <?php include "Inc_Files\SideContent.php" ?>
        </div>
        <div class="book-content-container">
            <?php include "Inc_Files\PopularTab.php" ?>
            <?php include "Inc_Files\NewArrivalTab.php" ?>
        </div>
    </div>
    <div class="footer">
        <?php include "Inc_Files\Footer.php" ?>
    </div>
</body>
</html>