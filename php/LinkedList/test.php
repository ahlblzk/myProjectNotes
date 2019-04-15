<?php
// 78a0*4c5*2f2*23
// 比如上面这个字符串，有三个是被*代替了，比如说*它的范围是0---9，a---f，要写出所有的组合。求解

$str = "78a0*4c5*2f2*23";
// $y = "abcdefghijklmnopqrstuvwxyz";
$y = "abcdef";
$insert = [];
for ($i=0; $i < 10; $i++) { 
	$insert[] = $i;
}
for ($i=0; $i < strlen($y); $i++) { 
	$insert[] = $y[$i];
}

// $pos=-1;
// do{
//     $pos=strpos($str,"*",$pos+1);
//     print_r($pos);
//     if($pos){
//         $sp[] = $pos;//三个*的位置
//     }
//     print_r($sp);
// }while($pos);

// print_r(strpos($str, "*",0));
$pos = 0;
// $po = 0;
while ( $pos !== false) {
	$pos = strpos($str, "*",$pos);
	// print_r($pos);
	if ( $pos == false) break;
	$po[] = $pos;
	$pos++;
}
	// print_r($po);






$newStr = [];
for ($i=0; $i <= strlen($str); $i++) { 
	$newStr[] = substr_replace($str, $insert[$i], $po[0],1);
	
}
print_r($newStr);
?>
