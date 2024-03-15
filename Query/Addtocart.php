
<?php 

    include ('DBconfig.php');

    if(isset($_GET["fdId"]) && $_GET["Qty"]){
        $product_id = $_GET["fdId"];
        $qty = $_GET["Qty"];
        $sql = "SELECT * FROM tblcart WHERE ProductID = $product_id";
        $result = $conn->query($sql);
        $total_cart = "SELECT * FROM tblcart";
        $total_cart_result = $conn->query($total_cart);
        $cart_num = mysqli_num_rows($total_cart_result);
    
        if(mysqli_num_rows($result) > 0){
    
            ?> <script>alert("Already in Cart.");</script><?php
        }else{
            $insert = "INSERT INTO tblcart(ProductID,Quantity) VALUES('$product_id','$qty')";
            if($conn->query($insert) === true){
                ?> <script>alert("Add to Cart.");</script><?php
                
            }else{
                echo "<script>alert(It doesn't insert)</script>";
            }
        }

    }

    if(isset($_GET["cart_id"])){
        $product_id = $_GET["cart_id"];
        $sql = "DELETE FROM tblcart WHERE ProductID=".$product_id;
    
        if($conn->query($sql) === TRUE){
           
        }
    }
?>

