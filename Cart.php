<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\Cart.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\navbar.css">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    </head>
<body>
    <?php include 'Inc_Files/Navbar.php'; ?>
    <?php include 'Query\Addtocart.php';?>
    <?php

    require_once 'DBconfig.php';

    $sql_cart = "SELECT * FROM tblcart";
    $all_cart = $conn->query($sql_cart);

    ?>
    <header>
        <h1>Shopping Cart</h1>
    </header>

    <?php
        include('DBconfig.php');
    ?>

        <div class="cart-container">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $total = 0; 

                    while ($row_cart = mysqli_fetch_assoc($all_cart)) {
                        $query = "SELECT tblbooks.*, tblcart.Quantity, (tblbooks.Price * tblcart.Quantity) AS Total FROM tblbooks INNER JOIN tblcart ON tblbooks.ProductID = tblcart.ProductID WHERE tblbooks.ProductID = " . $row_cart["ProductID"];
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><img class="product-image" src="<?php echo $row["Image"] ?>" alt="Product"></td>
                                    <td><?php echo $row["Title"] ?></td>
                                    <td>$<?php echo $row["Price"] ?></td>
                                    <td><?php echo $row["Quantity"] ?></td>
                                    <td>$<?php echo $row["Total"] ?></td>
                                    <td><a href="Cart.php?cart_id=<?php echo $row["ProductID"] ?>"><button>Remove</button></a></td>
                                </tr>
                                <?php
                                $total += $row["Total"];
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="6">
                                    <div class="cart-no-items">
                                        <h1>No items in the cart.</h1>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total:</td>
                        <td colspan="2">$<?php echo $total; ?></td>
                    </tr>
                </tfoot>
            </table>

            <a href="Explore.php"><button>Continue Shopping</button></a>
            <?php if($all_cart->num_rows > 0) {
                echo '<a href="Checkout_signup.php"><button>Check out</button></a>';
            } else {
                echo '<button>Check out</button></a>';
            }
            ?>
        </div>

        <?php
    $conn->close();
    ?>
    
</div>
    
</body>
</html>