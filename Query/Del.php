<?php 
    include '../DBconfig.php';

    $sfId = $_POST["ProdID"];
        $queryDelete = 'Delete From tblbooks 
        WHERE ProductID="'.$sfId.'"';

        if (mysqli_query($conn, $queryDelete)) {
            $conn->close();
            header("location:../Edit.php");
        } 
        else 
            echo "Error: " . $queryDelete . "<br>" . mysqli_error($conn);
?>