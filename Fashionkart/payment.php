<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
</head>
<body>
<center>
	<?php
	$total=0;
    if(isset($_SESSION['cart'])) 
    {
    foreach ($_SESSION['cart'] as $key => $value) 
    {
        $sr=$key+1;
        $total=$total+$value['Price'];
        }
    }
	?>
	<h1 style="background: black;color: white;width: 25vw;">Pay Invoice</h1>
	<p style="text-align: left; margin: 13px 0 0 38vw;">Payment Amount <?php echo $total; ?> /-</p>
	<label style="text-align: left; margin: 13px 0 0 -3vw;">Name On Card : </label><input type="Payment" name=""><br>	
	<label style="text-align: left; margin: 13px 0 0 -3vw;">Card Number : </label><input type="Payment" name=""><br>
	<label style="text-align: left; margin: 13px 0 0 -3vw;">Expiry Date: </label><input type="date" name=""><br>
	<label style="text-align: left; margin: 13px 0 0 -3vw;">Security Code : </label><input type="Payment" name=""><br>
	<label style="text-align: left; margin: 13px 0 0 -3vw;">Postal Zip Code : </label><input type="Payment" name=""><br>
	<a type="submit" Value="Pay <?php echo $total; ?> /-" class="btn" href="thanks.php">Pay <?php echo $total; ?> /-</a>
</center>
</body>
</html>