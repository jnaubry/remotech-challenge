<?php
	// Test file for orderBook class
	require_once 'orderBook.class.php';

	session_start();

	if (!empty($_POST)) {
		$orderBook = new orderBook();
		$orderId = $orderBook->addOpenOrder($_POST["side"],$_POST["price"]);
		echo 'Added Order ID: ' .$orderId;
	}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="orderBook">
</head>
<body>
	<form method="POST" action="testClass.php">
		<p>Add BUY order <input type="text" name="price" value=""><input type="submit" name="side" value="BUY"></p>
		<p>Add SELL order <input type="text" name="price" value=""><input type="submit" name="side" value="SELL"></p>
	</form>
</body>
</html>

