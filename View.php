<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\View.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\navbar.css">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
    <div class="navbar">
        <?php include "Inc_Files\Navbar.php" ?>
        <?php
            include('DBconfig.php');
		    $fdId = $_GET['fdId'];
            $qw = 'SELECT * FROM tblbooks b inner join tblcategories c on b.ID = c.ID Where ProductID = "'.$fdId.'"';
            $rw = $conn->query($qw);

            if ($rw->num_rows > 0) { ?>
                <?php while ($row = $rw->fetch_assoc()) { ?>
                    <div class="box-book">
                        <div class="view-container">
                            <div class="cover-view">
                                <img src="<?php echo $row["Image"]; ?>" alt="">
                            </div>
                            <div class="info-view">
                                <div class="title-view">
                                    <h1><?php echo $row["Title"]; ?></h1>
                                </div>
                                <div class="author-view">
                                    <h1>Author by: <?php echo $row["Author"]; ?></h1>
                                </div>
                                <div class="catg-view">
                                    <h1>Categories: <?php echo $row["Categories"]; ?></h1>
                                </div>
                                <div class="price-view">
                                    <h1>$ <?php echo $row["Price"]; ?></h1>
                                </div>
                                <div class="stock-view">
                                    <h1>In-Stock: <?php echo $row["Stock"]; ?></h1>
                                </div>
                                <div class="Qty-view">
                                    Quantity: <input type="number" id="Qty" name="Qty" min="1" max="<?php echo $row["Stock"]; ?>">
                                </div>
                                <div class="addtocart">
                                    <a href="javascript:(function(){ var fdId = <?php echo $fdId; ?>; var qty = document.getElementById('Qty').value; var url = 'Cart.php?fdId=' + fdId + '&Qty=' + qty; window.location.href = url; })()"><button class="add" >Add to cart</button></a>
                                </div>
                                <div class="desc-view">
                                    <p><?php echo $row["Description"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php } ?>
            <?php } else
                echo '0 results';
            $conn->close();
        ?>
    </div>
</body>

</html>