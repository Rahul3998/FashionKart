<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | FashionKart!</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
    
</head>

<body style="background: #fff;">

<!-- single  product detail  -->

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="img/product-10.jpg" alt="brand" width="100%" class="Product_Img">

            <!-- <div class="small-img-row">
                <div class="small-img-col">
                    <img src="img/gallery-1.jpg" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="img/gallery-2.jpg" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="img/gallery-3.jpg" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="img/gallery-4.jpg" alt="" width="100%" class="small-img">
                </div>
            </div>
 -->


        </div>
        <div class="col-2">
            <form method="post" action="manage-cart.php">
            <!-- <p>Home / T-shirt</p> -->
            <h1>X-Shoes</h1>
            <h4>3300.00</h4>
            <select name="" id="">
                <option value="" name="">Select Size</option>
                <option value="" name="XXL">XXL</option>
                <option value="" name="XL">XL</option>
                <option value="" name="Large">Large</option>
                <option value="" name="Medium">Medium</option>
                <option value="" name="Small">Small</option>
            </select>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="X-Shoes">
            <input type="hidden" name="Price" value="3300.00">

            <h3>Product Details</h3><br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita suscipit atque, nesciunt nisi officiis fugiat! Assumenda aut dolore modi aperiam explicabo, nam temporibus ullam id minus quo, unde possimus, accusantium praesentium adipisci accusamus qui natus.</p>
        </form>
        </div>
    </div>
</div>

<!-- title -->

<div class="small-container">
    
    <div class="row row-2">
        <h2>Related Product</h2>
        <select>
            <option>Default Shorting</option>
            <option>Shorting by Price</option>
            <option>Shorting by Popularity</option>
            <option>Shorting by Rating</option>
            <option>Shorting by Sale</option>
        </select>
    </div>


    <div class="row">
        <div class="col-4">
            <form method="post" action="manage-cart.php">
            <a href="product-detail-1.php"><img src="img/product-1.jpg" alt="product"></a>
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Red Printed T-shirt by HRx">
            <input type="hidden" name="Price" value="50.00">
        </form>
        </div>
        <div class="col-4">
            <form method="post" action="manage-cart.php">
            <a href="product-detail-2.php"><img src="img/product-2.jpg" alt="product"></a>
            <h4>X Shoes</h4>
            <p>8000.00</p>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="X Shoes">
            <input type="hidden" name="Price" value="8000.00">
        </form>
        </div>
        <div class="col-4">
            <form method="post" action="manage-cart.php">
            <a href="product-detail-3.php"><img src="img/product-3.jpg" alt="product"></a>
            <h4>Benetton Trac Pant</h4>
            <p>3000.00</p>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Benetton Trac Pant">
            <input type="hidden" name="Price" value="300.00">
        </form>
        </div>
        <div class="col-4">
            <form method="post" action="manage-cart.php">
            <a href="product-detail-5.php"><img src="img/product-5.jpg" alt="product"></a>
            <h4>HRX Shoes</h4>
            <p>5200.00</p>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="HRx Shoes">
            <input type="hidden" name="Price" value="5200.00">
        </form>
        </div>
        <div class="col-4">
           <form method="post" action="manage-cart.php">
                <a href="product-detail-6.php"><img src="img/product-6.jpg" alt="product"></a>
                <h4>Puma Sports T-Shirt</h4>
                <p>3300.00</p>
                <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Puma Sports T-Shirt">
            <input type="hidden" name="Price" value="3300.00">
        </form>
        </div>
        <div class="col-4">
           <form method="post" action="manage-cart.php">
                <a href="product-detail-7.php"><img src="img/product-7.jpg" alt="product"></a>
                <h4>Hrx Socks(3 piece)</h4>
                <p>550.00</p>
                <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Hrx Socks(3 piece)">
            <input type="hidden" name="Price" value="550.00">
        </form>
        </div>
    
</div>
</div>



<!-- footer  -->
<footer>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our app</h3>
                <p>Download App for Android and ios mobile phones.</p>
                <div class="app-logo">
                    <img src="img/play-store.png" alt="playstore">
                    <img src="img/app-store.png" alt="playstore">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="img/implogo.png" alt="logo">
                <p>Our purpose is to sustainable make the pleasure and benefits of sports accessible to the many.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">&copy;Copyright 2023 - All right reserved FashionKart!</p>
    </div>
</div>
</footer>


<!-- js for product gallery  -->
<script>
    var ProductImg = document.getElementByClassName("Product_Img");
    var SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].oneclick = function(){
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].oneclick = function(){
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].oneclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].oneclick = function(){
        ProductImg.src = SmallImg[3].src;
    }

</script>

</body>
</html>