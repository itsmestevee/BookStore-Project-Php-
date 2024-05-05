<?php
include '../DBconfig.php';

$deleteQuery = "DELETE FROM tblcart";
$deleteResult = $conn->query($deleteQuery);

if ($deleteResult) {
} else {
    header("HTTP/1.1 500 Internal Server Error");
    echo "Error clearing cart: " . $conn->error;
}

if (isset($_GET['redirect']) && $_GET['redirect'] === 'home') {
    header('Location: ../index.php');
    exit();
}

$conn->close();
?>

