<?php
$a = array('13','35','1','5','40','86');
$newArr = array();
for($i = 0; $i < count($a); $i++){
	$count = 1;
	for($j = $i + 1; $j < count($a); $j++){
		if($a[$i] < $a[$j]){
			$count = $count + 1;
			$newArr[$i] = $count;
		} else {
			$newArr[$i] = $count;
			break;
		}
	}	
}
$max = array_keys($newArr, max($newArr));
print_r($newArr[$max[0]]); echo "\n";
for($i = $max[0]; $i < $newArr[$max[0]]+$max[0]; $i++){
	print_r($a[$i]."->");
}


?>
