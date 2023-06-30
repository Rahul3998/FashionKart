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

<!-- add to cart -->

<div class="small-container cart-page">
    <table style="width: 100%;text-align: center;width: 100%;text-align: center;border-collapse: collapse;color: black;">
        <thead>
        <tr style="margin: 15px;padding: 15px;height: 15px;background: #ffe6e6;border: 31px;">
      <th scope="col">Serial no.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
    </thead>
        <tbody class="text-center">
  <?php
     $total=0;
    if(isset($_SESSION['cart'])) 
    {
    foreach ($_SESSION['cart'] as $key => $value) 
    {
        $sr=$key+1;
        $total=$total+$value['Price'];
        //print_r($value);
        echo "
        <div class='cart-info'>
        <tr>
        <td>$sr</td>
        <td>$value[Item_Name]</td>
        <td>$value[Price] /-</td>
        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
        <td>
        <form action='manage-cart.php' method='POST'>
        <button class='btn btn-sm' name='Remove_Item'>Remove</button>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        </tr>
        </div>
        ";
        }
    }
    ?>
  </tbody>
    </table>
</div>

<div class="small-container">
    <div class="border bg-light rounded">
    <h4>Total : </h4>
    <h5><?php echo $total; ?> /-</h5>
    <form>
        <input class="form-check-input" type="radio" name="" value>
        <label>Cash on Delivery</label>
        <a href="payment.php" class="btn">Make Payment</a>
    </form>
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