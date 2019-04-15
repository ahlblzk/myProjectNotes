<?php
/**
 * [maopao 冒泡排序]
 * @param  [type] $arr [description]
 * @return [type]      [description]
 */
function maopao($arr){

	// 第一次控制循环轮次为数组个数减1次
	for ($i=1; $i < count($arr); $i++) { 
		// 第二次循环控制每轮循环比较的次数为数组个数减去当前循环的轮次
		for ($j=0; $j < count($arr)-$i; $j++) { 
			// 如果第一个数大于第二个数，则交换数据
			if ($arr[$j] > $arr[$j+1]) {
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $tmp;
			}
		}
	}
	return $arr;
}


/**
 * [kuaisu 快速排序]
 * @return [type] [description]
 */
function kuaisu($arr){
	$left = [];
	$right = [];
	if(count($arr)<=1) return $arr;
	for ($i=1; $i < count($arr); $i++) { 
		if ($arr[$i] < $arr[0]) {
			$left[] = $arr[$i];
		}else{
			$right[] = $arr[$i];
		}
	}
	$left = kuaisu($left);
	$right = kuaisu($right);
	// print_r($left);
	$newarr = array_merge($left,array($arr[0]),$right);
return $newarr;
}

$arr = [4,2,6,8,9,1,5];
// print_r(kuaisu($arr));
function kuai($arr){
	$left = [];
	$right = [];
	if(count($arr)<=1) return $arr;
	for ($i=1; $i < count($arr); $i++) { 
		if($arr[$i]<$arr[0]){
			$left[] = $arr[$i];
		}else{
			$right[] = $arr[$i];
		}
	}
	$left = kuai($left);
	$right = kuai($right);
	// print_r($left);
	$newarr = array_merge($left,array($arr[0]),$right);
return $newarr;
}
print_r(kuai($arr));






?>