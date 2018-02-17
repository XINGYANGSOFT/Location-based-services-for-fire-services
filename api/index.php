<?php
//火警自动发送微信群api

$i = explode(",", $_GET['i']);

//在此替换空格！！！！！！！！！！！！！！！！！！！！！
$ii = "接警：".str_replace(" ", "-", $i[0])."%0A"."电话：".$i[1]."%0A"."地址：".$i[2]."%0A"."车辆：%0A".str_replace(")0", ")%0A0",  str_replace(" ", "", $i[3]));
$url = 'http://127.0.0.1:3000/openwx/send_group_message?displayname=test&content='.$ii;

print_r($i);

// 初始化一个 cURL 对象 
$curl = curl_init(); 
// 设置你需要抓取的URL 
curl_setopt($curl, CURLOPT_URL, $url); 
// 设置header 响应头是否输出
curl_setopt($curl, CURLOPT_HEADER, 1); 
// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
// 1如果成功只将结果返回，不自动输出任何内容。如果失败返回FALSE 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0); 
// 运行cURL，请求网页 
$data = curl_exec($curl); 
// 关闭URL请求 
curl_close($curl); 
// 显示获得的数据 
print_r($data); 


?>