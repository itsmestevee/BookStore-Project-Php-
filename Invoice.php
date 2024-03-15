<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS\Invoice.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="CSS\navbar.css">
        <link rel="stylesheet" href="CSS\Style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
</head>
<body>

    </head>
    <body>
        <?php include 'Inc_Files\Navbar.php'; ?>
    <?php

        require_once 'DBconfig.php';

        $sql_cart = "SELECT * FROM tblcart";
        $all_cart = $conn->query($sql_cart);

    ?>
    <?php 
        include 'DBconfig.php';

        $totalAmount = 0;

        ?>

        <div class="invoice-container">
            <div class="invoice-header">
                <h1>Invoice</h1>
                <p><?php
                $rand = rand();
                echo 'Invoice Number: INV-' .$rand;
                ?></p>
                <p><?php
                $currentDateTime = date('Y-m-d');
                echo 'Date: ' .$currentDateTime;
                ?></p>
                <h4>Shipping Info:</h4>
                <p style="text-align: left; ">Name: <?php echo $_POST['username'] ?> </p>
                <p style="text-align: left; ">Phone Number: <?php echo $_POST['phonenumber'] ?></p>
                <p style="text-align: left; ">Location: <?php echo $_POST['address'] ?> </p>
            </div>

            <div class="invoice-items">
                
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($row_cart = mysqli_fetch_assoc($all_cart)) {
                            $query = "SELECT tblbooks.*, tblcart.Quantity, (tblbooks.Price * tblcart.Quantity) AS Total FROM tblbooks INNER JOIN tblcart ON tblbooks.ProductID = tblcart.ProductID WHERE tblbooks.ProductID = " . $row_cart["ProductID"]; 
                            $result = $conn->query($query);

                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row["Title"] ?></td>
                                    <td><?php echo $row["Quantity"] ?></td>
                                    <td><?php echo $row["Price"] ?></td>
                                    <td><?php echo $row["Total"] ?></td>
                                </tr>
                                <?php
                                $totalAmount += $row["Total"]; // Add the total for each row to the overall total
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="invoice-total">
                <p><strong>Total Amount:</strong> $<?php echo number_format($totalAmount, 2) ?></p>
            </div>
            <div class="invoice-footer">
                <a href="Query/clearcart.php?redirect=home"><p>Thank you for your business!</p></a>
            </div>
        </div>

        <?php
        $conn->close();
    ?>



    </body>
</html>