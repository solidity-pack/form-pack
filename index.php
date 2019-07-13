<html>
<head>
	<title>solidity-pack</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
 
	<h1>Create Your Own Token ERC-20</h1>
 
	<div class="kotak_crypto">
		<p class="tulisan_crypto">Form Create Token ERC-20</p>
 
		<form action="" method="POST">
			<label>Name Token</label>
			<input type="text" name="name" class="form_crypto" placeholder="(Elastos)">
 
			<label>Symbol Token</label>
			<input type="text" name="symbol" class="form_crypto" placeholder="(ELA)">

			<label>Supply Token</label>
			<input type="number" name="supply" class="form_crypto" placeholder="(34663040)">

			<label>Decimals Token</label>
			<input type="number" name="decimal" class="form_crypto" placeholder="(8)">
 
			<input type="submit" name="submit" class="tombol_crypto" value="crypto">
		</form>
		
	</div>
 
 
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	include 'function/function.php';
	$TokenERC20 = new TokenERC20();
	$name = $_POST['name'];
	$symbol = $_POST['symbol'];
	$supply = $_POST['supply'];
	$decimal = $_POST['decimal'];
	//file
	$run = $TokenERC20->basic($name, $symbol, $supply, $decimal);
	$file = fopen("TokenERC20.sol","w");
	echo fwrite($file, $run);
	fclose($file);
	echo "<script>alert('Smart Contract is success write, check file in the TokenERC20.sol'); window.location = 'index.php';</script>";
}
?>