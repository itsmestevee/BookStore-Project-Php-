<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\navbar.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="Home.php"><img src="img/logo.png" alt="" height="50px"></a>
        </div>
        <div class="nav-container">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Explore.php">Explore Books</a></li>
                <li><a href="Categories.php">Categories</a></li>
                <li><a href="About.php">About</a></li>
            </ul>
        </div>
        <div class="icon">
            <a href="Cart.php"><i class="fa-solid fa-cart-shopping fa-xl" style="color:black;"></i> Cart</a>
            <?php if (isset($_SESSION['username'])) : ?>
            <a href="Profile.php"><i class="fa-solid fa-circle-user fa-2xl" style="color:black;"></i> <?= $_SESSION['username']; ?></a>
            <?php else: ?>
            <a href="Login.php"><i class="fa-solid fa-circle-user fa-2xl" style="color:black;"></i> Login</a>
            <?php endif; ?>

        </div>
    </div>
</body>
</html>