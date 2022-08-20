<?php

//error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
       {
        header("location:login.php");
   
       }



 if (isset($_POST["submit"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
           
		   if (!in_array($_POST["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_POST["id"],
                    'item_name' => $_POST["name"],
                    'product_price' => $_POST["prize"],
                    'item_quantity' => $_POST["quantity"]
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="viewCart.php"</script>';
				
				
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_POST["id"],
                'item_name' => $_POST["name"],
                'product_price' => $_POST["prize"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
			
			echo '<script>window.location="viewCart.php"</script>';
        }
		
	}
	
	
	 if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="viewCart.php"</script>';
					
					
                }
            }
        }
    }
	
	
	
	
	
	
	
	
?>
<!DOCTYPE html>

<html>
	
	<head>
		<title>cart page</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<style>
		
		body
		{	//background-image: url('https://thumbs.dreamstime.com/b/cart-filled-letters-english-alphabet-three-books-red-white-background-metal-wooden-139619560.jpg');
			
//background-image: url('https://t3.ftcdn.net/jpg/02/12/69/48/360_F_212694891_alVuhG0ImQP5tluUaUC12EFuccg6Z0C0.webp');
//background-image: url('https://previews.123rf.com/images/photobyphotoboy/photobyphotoboy1912/photobyphotoboy191200442/136515617-small-shopping-cart-with-credit-card-on-laptop-online-shopping-and-shopping-concept.jpg');
			background-attachment:fixed;
			background-repeat:no-repeat;
			background-size:100% 100%;
background-image: url('https://wallpaperaccess.com/full/2593068.jpg');	

			overflow-y:scroll;
			
		}
		
		table
		{
			margin:30px;
			text-align:center;
			float:center;
			border:1px solid #ddd;
			font-family:cursive;
			letter-spacing:1px;
			box-shadow:0.6px 1px 1px 2px #ddd;
			margin-top:-2px;
		}
		th
		{
			width:100px;
			text-align:center;
			outline:none;
			border:1px solid #ddd;
			height:60px;
		}
		
		td
		{
			height:60px;
			
		}
		tr:nth-child(odd)
			{
				background-color:#f2f2f2;
				//background-color:red;
				outline:none;
				border:1px solid #E4DCCF;
				
			}
		
		tr:nth-child(even)
		{
			background-color:#EAF6F6;
		}
		
		a:hover
		{
			text-decoration:none;
			color:white;
		}
		a
		{
			color:black;
		}
		#pay
		{
			margin-left:535px;
			margin-top:-90px;
			border:1px solid #ddd;
			height:60px;
			width:100px;
			position:absolute;
		}
		.cartPay
		{
			
			display:block;
			width:200px; 
			height:200px;
			float:right;
			margin-top:-180px;
			margin-right:500px;
			
		}
		
		form
		{
			border:1px solid #ddd;
			box-shadow:0.2px 0.2px 4px red, 0.3px 2px 8px blue;
			border-radius:6px;
			width:400px;
			height:550px;
			padding:60px;
			margin-top:-50px;
			margin-left:800px;
		background-image: url('https://media.istockphoto.com/photos/stacked-credit-cards-picture-id1203763961?k=20&m=1203763961&s=612x612&w=0&h=mrFgkoWWVdp0mtt_vw6OTEZCSjw3bUYhuJt5QWVdkXo=');
		}
		.h3
		{
			margin-left:930px;
			font-family:cursive;
			margin-top:-230px;
			
		}	
		input
		{
			border:1px solid #ddd;
			box-shadow:0.6px 0.2px 4px red, 0.3px 2px 8px blue;
			border:none;
			outline:none;
			border-radius:6px;
			font-size:22px;
			height:40px;
			color:white;
			background-image:url('https://media.istockphoto.com/photos/stacked-credit-cards-picture-id1203763961?k=20&m=1203763961&s=612x612&w=0&h=mrFgkoWWVdp0mtt_vw6OTEZCSjw3bUYhuJt5QWVdkXo=');
		}
		textarea
		{
			border:1px solid #ddd;
			box-shadow:0.6px 0.2px 4px red, 0.3px 2px 8px blue;
			border:none;
			outline:none;
			border-radius:6px;
			font-size:22px;
background-image:url('https://media.istockphoto.com/photos/stacked-credit-cards-picture-id1203763961?k=20&m=1203763961&s=612x612&w=0&h=mrFgkoWWVdp0mtt_vw6OTEZCSjw3bUYhuJt5QWVdkXo=');

		}
		
		#continue
		{
			margin-left:30px;
			margin-top:-90px;
		}
		#view
		{
			margin-left:600px;
			font-family:cursive;
			color:black;
		}
		nav
		{
			color:white;
			
		}
		
	</style>
	
	
	
	</head>
	
	
	
	<body>
		<h1 id="view">View Cart</h1>
		<button type="button" name="continue" id="continue" class="btn btn-success">
		<a href="cart.php">continue <i class="fa fa-arrow-circle-left"></i></a>
		</button>
	
	
			<table border="1" cellpadding="0" cellspacing="0">
			
			<tr>
				<th>BookName</th>
				<th>Quantity</th>
				<th>Prize</th>
				<th >Total Price</th>
				<th>Remove Item</th>
			</tr>
			
			
			
               <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
					$array="";
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
							<td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["product_price"]; ?></td>
							
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                           
						    <td>
							<button type="button" class="btn btn-danger">
						<a href="viewCart.php?action=delete&id=<?php echo $value["product_id"];?>"> Remove</a>
							</button>
								
                                        
										</td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
						$array =$array.$value["item_name"]."(".$value["item_quantity"].")".",";
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right"><b>Total</b></td>
                            <th colspan="2">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
			
			<button type="button" class="btn btn-primary" id="pay" onclick="payment()"> Payment</button>
			
			<nav id="CartPay" class="CartPay" style="display:none; width:200px; height:200px;">
				<h3 align="center" class="h3">Payment<h3>
				<form action="success1.php" method="post">
					<input type="text" name="name" required placeholder="Enter your Name"><br><br>
					<input type="number" maxlength="10" name="cardNum" required placeholder="cardNumber"><br><br>
					<input type="number" name="CVV" required placeholder="CVV" ><br><br>
					Shipping Address:<br><br> <textarea cols="23" rows="4" name="Shipaddress"></textarea><br><br>
					Total is= $
					<?php 
					
					if($total != 0)
					{ 
						echo $total;
					}
					?>.00 <br><br> &emsp;
					
					<input type="hidden" name="hidden" value="<?php echo $total ?>">
					<input type="hidden" name="h1" value="<?php echo $array; ?>">
					
					
					
					<button type="submit" name="submit"  class="btn btn-primary">Payment</button> &emsp;&emsp;
					<button type="button" name="cancel" class="btn btn-danger" href="javascript:void(0)" onclick="PaymentClose()">Cancel</button>
				</form>
				<br>
			</nav>
			<br><br><br>
			
			
			</body>
</html>

<script>

	function payment()
	{
		if(<?php echo $total?> != 0)
		{
			document.getElementById("CartPay").style.display="block";
		}
		else
		{
			document.getElementById("CartPay").style.display="none";
			console.log("Try to add books");
		}
	}
	
	 function PaymentClose()
	{
		document.getElementById("CartPay").style.display="none";
	}

</script>

