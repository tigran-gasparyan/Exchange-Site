<?php require "blocks/header.php"?>



<p class="welcome-convert">If you want more functional you will use <a href="https://t.me/ExchangeCurrencyCrypto_bot">Bot</a></p>

<div class="links-crypto">

	<a class="crypto-link" href="crypto.php">Crypto&nbsp;&nbsp;Convert</a>
<br>
	<a class="currency-link" href="currency.php">Currency Convert</a>
</div>







<div class="crypto-div">
	<div class="crypto-form-div">
	<form action="crypto.php" class="form-2" method="post">
		<div class="crypto-input-div">
		<input type="text" class="crypto-input" name="crypto" placeholder="crypto">
		</div>
		<input type="submit" class="crypto-button" name="btn" placeholder="Button" value="Convert">
	</form>
	</div>

</div>


<?php

$crypto = $_POST['crypto'];

$url = "https://crypto.com/price/$crypto";
$file = file_get_contents($url);

$pattern = '#<span class="chakra-text css-13hqrwd.+?</span>#s';

preg_match($pattern, $file, $matches);



$crypto =  $matches[0];

echo "<p class='output-crypto'>$crypto</p>" ;

?>



<?php require "blocks/footer.php"?> 