<?php
//作者QQ：2698295603 淘宝：https://zaixuasd.taobao.com/  致力于金融数据
error_reporting(0);
 
	if(true){
	$url = "http://hq.sinajs.cn/list=CU1609";
	
	$html = getHtml($url);
	//echo $html;
		if(!empty($html)){
			$arr =  explode(",",$html);
		$data = array();
 
		$diff = $arr[8]-$arr[10];
		$diffRate= (($arr[8]-$arr[10])/$arr[10]) *100;
			//名称-最新价-涨跌-涨跌幅-开盘价-最高-最低-昨收-更新时间
		$data= array("name"=>'铜',"price"=>$arr[8],"diff"=>round($diff,2),"diffRate"=>round($diffRate,2).'%',"jinkai"=>$arr[2],"zuoshou"=>$arr[10],"zuidi"=>$arr[4],"zuogao"=>$arr[3],"time"=>date('Y-m-d H:i:s'));
		$json =json_encode($data);
	echo $json;
	}}else{
			echo '参数非法';
		}
	
	//print_r($arr);

	


 

function getHtml($url,$data = null){
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT,20);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}
?>