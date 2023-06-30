<?php
include("header.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
    
</head>
<body>

<div class="container">
		<div class="col-lg-12 text-center border rounded bg-light my-5">
			<h1>My Cart</h1>
		</div>
		<div class="col-lg-8">
		
		<table class="table">
  	<thead class="text-center">
    <tr>
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
		<tr>
		<td>$sr</td>
		<td>$value[Item_Name]</td>
		<td>$value[Price]</td>
		<td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
		<td>
		<form action='manage-cart.php' method='POST'>
		<button class='btn btn-sm' name='Remove_Item'>Remove</button>
		<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
		</form>
		</td>
		</tr>
		";
		}
	}
	?>
  </tbody>
</table>
		</div>

</div>


<div class="col-lg-9">
	<div class="border bg-light rounded">
	<h4>Total : </h4>
	<h5><?php echo $total; ?></h5>
	<form>
		<input class="form-check-input" type="radio" name="" value>
		<label>Cash on Delivery</label>
		<button class="btn btn-primary btn-block">Make Purchase</button>
	</form>
</div>
</div>

</body>
</html>
