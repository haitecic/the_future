<?php
echo "123";
$x=MyTest(90);
echo $x;
function MyTest($num){
	$num=$num+1;
	//echo $num;
	if($num<=100){
		$result=MyTest($num);
	}
	else{
		return $num;
	}
	return $result;
}
?>