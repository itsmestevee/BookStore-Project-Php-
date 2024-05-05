<?php
    include '../DBconfig.php';

    session_start();

    $sql = "SELECT * from tbluser where Email = '".$_POST['Email']."' and password = '".$_POST['password']."'";
    $result = mysqli_query($conn, $sql) or die;

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        $_SESSION['ID'] = $user['ID'];
        $_SESSION['email'] = $user['Email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];

        if($_POST['Email'] === 'Admin' && $_POST['password'] === '321321'){
            header('Location: ../Edit.php');
        } else {
            header('Location: ../index.php');
        }
    } else {
        echo '<script>alert("Login unsuccessful");</script>';
        echo '<script>window.location.href="../Login.php";</script>';
    }

?>
