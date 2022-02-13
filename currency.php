<?php require "blocks/header.php"?>



<p class="welcome-convert">If you want more functional you will use <a href="https://t.me/ExchangeCurrencyCrypto_bot">Bot</a></p>

<div class="links-crypto">
	<a class="crypto-link" href="crypto.php">Crypto&nbsp;&nbsp;Convert</a>
<br>
	<a class="currency-link" href="currency.php">Currency Convert</a>
</div>





<div class="currency-div">
	<form action="currency.php" class="from-1" method="post">

		<div class="input-currency-1">

		<input type="text" class="currency-input-1" name="currency-1" placeholder="Currency">

		</div>

		<div class="input-currency-2">

		<input type="text" class="currency-input-2" name="currency-2" placeholder="Currency">

		</div>

		<input type="submit" class="currency-button" name="button" placeholder="Button" value="Convert">
	</form>

</div>



<?php 
header('Content-type: text/html; charser=utf-8');

$currency1 = $_POST['currency-1'];
$currency2 = $_POST['currency-2'];


$url1 = "https://wise.com/gb/currency-converter/$currency1-to-$currency2-rate";
$file1 = file_get_contents($url1);

$pattern1 = '#<span class="text-success.+?</span>#s';

preg_match($pattern1, $file1, $matches1);

$currency =  $matches1[0];

echo "<p class='output-currency'>$currency</p>" 



?>

<?php require "blocks/footer.php"?> 