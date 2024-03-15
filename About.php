<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\About.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="CSS\Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'Inc_Files/Navbar.php';
    ?>
    <h1 class="About-title">All of our Members</h1>
    <div class="container-about">
        <div class="about-tabs">
            <img class="circular--square" src="img\0.png" alt="">
            <h1>Chean Chharakvily</h1>
            <p>IT-30-45</p>
            <p>National University of Management</p>
        </div>
        <div class="about-tabs">
            <img class="circular--square" src="img\32.jpg" alt="">
            <h1>Phan Nika</h1>
            <p>IT-30-45</p>
            <p>National University of Management</p>
        </div>
        <div class="about-tabs">
            <img class="circular--square" src="img\15.jpg" alt="">
            <h1>Chea ChanRathana</h1>
            <p>IT-30-45</p>
            <p>National University of Management</p>
        </div>
        <div class="about-tabs">
            <img class="circular--square" src="img\20.png" alt="">
            <h1>Reth Saraknorin</h1>
            <p>IT-30-45</p>
            <p>National University of Management</p>
        </div>
        <div class="about-tabs">
            <img class="circular--square" src="img\33.jpg" alt="">
            <h1>Tha Thyda</h1>
            <p>IT-30-45</p>
            <p>National University of Management</p>
        </div>
    </div>
    
</body>
</html>