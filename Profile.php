<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\Profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="CSS\Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "Inc_Files\Navbar.php" ?>
    <header>
        <h1>User Profile</h1>
    </header>

    <div class="profile-container">
        <div class="profile-picture">
            <img src="img\profile.png" alt="Profile Picture">
        </div>

        <div class="user-info">
            <h2><?= $_SESSION['username']; ?></h2>
            <p>Email: <?= $_SESSION['email']; ?></p>
            <p>Location: City, Country</p>
        </div>

        <div class="logout-btn">
            <a href="Query\Logout_Query.php">Logout</a>
        </div>
    </div>
</body>
</html>