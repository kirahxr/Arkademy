<?php
// mencari setiap berapa hari jadwal mengajar Pak Hasan akan bentrok
function toInfinity($params1){
	$index = $params1 + 1;
	while (true) {
		yield $index;
		$index += 1;
	}
}

function isLowest($params1, $params2){
	if($params1 < $params2){
		return $params2;
	}else{
		return $params1;
	}
}
function isBentrok($params1, $params2){
	foreach(toInfinity(isLowest($params1,$params2)) as $i){
		if($i % $params1 == 0 && $i % $params2 == 0){
			echo $i;
			break;
		}
	}
}
echo isBentrok(4,6);
echo "\n";
echo isBentrok(5,6);
?>