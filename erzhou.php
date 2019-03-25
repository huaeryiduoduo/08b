<?php
$arr=[1,2,3,4];
function yi($arr){
	$len=count($arr);
	//var_dump($len);
	$res=[];
	for ($i=0; $i <$len ; $i++) { 
		for ($j=0; $j <$len ; $j++) { 
			for ($k=0; $k <$len ; $k++) { 
				if($arr[$i]!=$arr[$j]&&$arr[$j]!=$arr[$k]&&$arr[$k]!=$arr[$i]){
					$res[]=$arr[$i].$arr[$j].$arr[$k];
				}
			}
		}
	}
	return $res;
}
//var_dump(yi($arr));

/**
* 
*/
class Db 
{
	private static  $instence=null;
	private  function __clone(){

	}
	
	private function __construct()
	{
		
	}
	public function getuser(){

	}
}



$dir="E:\Wamp\phpStudy\WWW\html5";
function san($dir){
	$dirs=scandir($dir);
	foreach ($dirs as $key => $v) {
		if(is_dir($v)){
			$dir=$dir.$v;
			if($v!='.'||$v!='..'){
				echo "$v";
			}

	}else{
		echo "$v";
	}
	}
	

}
//print_r(san($dir));

$aPath="/a/b/c/d/test.php";
$bPath="/a/b/d/c/test.php";
function si($aPath,$bPath){
	$a=explode("/",$aPath);
	$b=explode("/",$bPath);
	$res=[];
	$aPathss=count($a);
	for ($i=0; $i <$aPathss ; $i++) { 
		if($a[$i]==$b[$i]){
			$res[]=$a[$i];
		}else{
			break;
		}
	}
	
	$da=implode('/',$res);
	return $da;

}
print_r(si($aPath,$bPath));
?>