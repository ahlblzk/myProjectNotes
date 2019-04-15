<?php
//  二分查找
 
function search($numbers,$find){
	$low = 0;
	$high = count($numbers)-1;

	// 退出条件
	// if($low>=$high) return -1;
	while ($low<=$high) {
		// 中间值计算
		$mid = intval(($low+$high)/2);
		// $mid = $low + (($high - $low) >> 1);
		if($numbers[$mid]==$find){
			return $mid;
		}elseif ($numbers[$mid]<$find) {
			$low = $mid + 1;
		}else{
			$high = $mid -1;
		}


	}

	return -1;



}

function searchFirst($numbers,$find){

	$low = 0;
	$high = count($numbers)-1;

	while ($low>=$high) {
		$mid = intval(($low+$high)/2);
		if ($numbers[$mid]==$find) {
			return $mid;
		}
	}
	return -1;
}


// 测试二分查找给定值
$numbers = [0, 1, 2, 3, 3, 4, 5, 6, 7,9];
$find = 1;
print_r(search($numbers,$find));


?>