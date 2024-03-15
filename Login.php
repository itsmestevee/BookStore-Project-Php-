<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>
<body>
    <?php include "Inc_Files\Navbar.php" ?>

    <div class="Login-container">
        <form class="Login-form" action="Query/Login_Query.php" method="post">
            <h2>Login</h2>
            <label for="Email">Email:</label>
            <input type="text" id="Email" name="Email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <p class="Signup-link">Don't have an account? <a href="Signup.php">Sign Up!</a></p>

            <button type="submit">Login</button>
        </form>

    </div>
</body>
</html>
