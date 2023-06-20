<?php 

$data = $this->cart->contents();
var_dump($data)."<br>";

foreach ($data as $item ) {
	echo "<hr>";
	echo $item['rowid']."<br>";
}

?>