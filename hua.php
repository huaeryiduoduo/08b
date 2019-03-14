<?php
$min=100;
$max=999;
$arr[]='';
function hua($min,$max,$arr){
	for ($i=$min; $i <$max ; $i++) { 
		$a=floor($i%10);
		$b=floor($i/10%10);
		$c=floor($i/100%10);
		if($a*$a*$a+$b*$b*$b+$c*$c*$c==$i){
			$arr[]=$i;
		}
	}
var_dump($arr);
}
print_r(hua($min,$max,$arr));



?>