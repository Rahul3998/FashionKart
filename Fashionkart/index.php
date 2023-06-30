<?php
include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to FashionKart! | Indias No.1 Online Shoping Center for Men & Womens.....</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body style="background: #fff;">
    <div class="row">
        <div class="col-2">
            <img src="img/bg.jpg" alt="image1">
        </div>
        <div class="col-2">
            <h1>Give your Fashion <br>a New Style<br><a href="products.php" style="color: Red;">FashionKart..!</a></h1>
            <p>Don't be into trends. Don't make fashion own you, but you decide what you are, what you want to express by the way you dress and the way to live.</p>
            <a href="products.php" class="btn">Explore Now &#8594;</a>
        </div>
    </div>


<!-- featured categores -->
<div class="categories">
            <h1 style="text-align: center; ">Brands</h1>
    <div class="small-container">
    <div class="row">
        <div class="col-3">
            <a href="#"><img src="img/b1.png" alt="category"></a>
        </div>
        <div class="col-3"style="background: black;">
            <a href="#"><img src="img/b2.png" alt="category"></a>
        </div>
        <div class="col-3">
            <a href="#"><img src="img/b3.png" alt="category"></a>
        </div>
    </div>
</div>
</div>






<!-- Featured Products -->
<div class="small-container">
    <h2 class="title">Featured Product</h2>
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


<!-- offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="img/exclusive.png" alt="offer" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusive offer available on FashionKart</p>
                <h1>Smart Band 4</h1>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consectetur magnam cupiditate voluptatem esse voluptate sunt ipsa? Officia, neque consectetur.</small>
                <a href="smbd.php" class="btn">Buy now &#8594;</a>
            </div>
        </div>
    </div>
</div> 

<!-- latest product -->
<div class="small-container">
    <h2 class="title">Featured Product</h2>
    <div class="row">
    <!-- <h2 >Latest Product</h2> -->
        <div class="col-4">
            <form method="post" action="manage-cart.php">
            <a href="product-detail-8.php"><img src="img/product-8.jpg" alt="product"></a>
            <h4>Fossil Watch</h4>
            <p>500.00</p>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Fossil Watch">
            <input type="hidden" name="Price" value="500.00">
        </form>
        </div>
        <div class="col-4">
            <form method="post" action="manage-cart.php">
            <a href="product-detail-9.php"><img src="img/product-9.jpg" alt="product"></a>
            <h4>X Shoes</h4>
            <p>$80.00</p>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Red Printed T-shirt by HRx">
            <input type="hidden" name="Price" value="50.00">
        </form>
        </div>
        <div class="col-4">
            <form method="post" action="manage-cart.php">
            <a href="product-detail-10.php"><img src="img/product-10.jpg" alt="product"></a>
            <h4>X-Shoes</h4>
            <p>3500.00</p>
            <button class="btn" name="Add_To_Cart" type="submit">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="X-Shoes">
            <input type="hidden" name="Price" value="3500.00">
        </form>
        </div>
        <!-- <div class="col-4">
            <img src="img/product-11.jpg" alt="product">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
        </div> -->
</div>  
</div>



<!-- brands -->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="img/logo-godrej.png" alt="logo">
            </div>
            <div class="col-5">
                <img src="img/logo-oppo.png" alt="logo">
            </div>
            <div class="col-5">
                <img src="img/logo-coca-cola.png" alt="logo">
            </div>
            <div class="col-5">
                <img src="img/logo-paypal.png" alt="logo">
            </div>
            <div class="col-5">
                <img src="img/logo-philips.png" alt="logo">
            </div>
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
<script src="script.js"></script>
</body>
</html>