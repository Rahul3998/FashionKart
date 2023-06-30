<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionKart! | Online Shoping Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>

<div class="navbar">
        <div class="logo">
            <img src="img/implogo.png" alt="logo" width="125px">
            <h1>FashionKart!</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                $count=0;
                if (isset($_SESSION['cart'])){
                    $count=count($_SESSION['cart']);
                }
                ?>
                <li><a href="mycart.php">My Cart( <?php echo $count ?> )</a></li>
                <li class="sub-menu-link">
                <a href="logout.php">logout</a>
                </li>
            </ul>
        </nav>
</div>



</body>
</html>






