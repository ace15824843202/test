<?php 

header('content-type:text/html;charset=utf8');

//http://web.juhe.cn:8080/constellation/getAll?consName=%E6%91%A9%E7%BE%AF%E5%BA%A7&type=today&key=4ee67659902b917d53a9412adf2a3bd2


/*
curl_init 初始化一个curl会话
curl_setopt 设置curl传输选项
curl_exec($ch);执行一个curl会话
curl_close($ch);关闭一个curl会话



 */

$url = "http://web.juhe.cn:8080/constellation/getAll?consName=双鱼座&type=today&key=4ee67659902b917d53a9412adf2a3bd2";

$ch = curl_init();

// var_dump( $ch );

curl_setopt( $ch,CURLOPT_URL,$url );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, 1 );
$result = curl_exec( $ch );

curl_close( $ch );

$jsonObj = json_decode( $result );

echo '<pre>';
var_dump( $jsonObj );
echo $jsonObj->summary;
foreach ($jsonObj as $key => $value) {
	$str.=$key.":".$value."\n";
}
var_dump( $str );


exit;
echo $result;

 ?>