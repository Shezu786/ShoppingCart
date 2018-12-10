<html>
	<head>Add to Cart</head>
	<body>
		<form method="POST" action="success.php">
			<input type="Cart"/>
		</form>
		<?php
			if(isset($_POST["btnAddtocart"])){
				echo "Order ID: A00123 <br/>";
				echo "Product Name : Samsung J7 <br/>";
				echo "Price : 15000 ";
			}
		?>
	</body>
</html>
