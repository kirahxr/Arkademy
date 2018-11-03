<?php
// Return Value
$var = array(
	'itemId' => '12341822', 
	'itemName' => 'desk', 
	'price' => 700000,
	'ratings' => array(['rater' => 'akmal', 'score' => 4],['rater' => 'andi', 'score' => 5]),
	'freeShipping' => true,
	'color' => array('brown', 'black'),
);
$json = json_encode($var);
echo $json;
?>