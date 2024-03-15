<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Signup.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
    <?php include "Inc_Files\Navbar.php" ?>

    <div class="signup-container">
        <form class="signup-form" action="Query\Login_Upload.php" method="post" enctype="multipart/form-data">
            <h2>Sign Up</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <p class="login-link">Already have an account? <a href="Login.php">Login</a></p>

            <button type="submit">Sign Up</button>
        </form>

    </div>
</body>
</html>
