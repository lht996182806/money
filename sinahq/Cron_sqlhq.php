<?php
//作者QQ：2698295603 淘宝：https://zaixuasd.taobao.com/  致力于金融数据
error_reporting(0);
include 'db.php';
 $conn = @mysql_connect($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd);
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db($cfg_dbname, $conn);
mysql_query("set names 'utf8'");
$db1='CU1609';
$db2='AG1612';
$db3='CL';
//
$url_usd = "http://hq.sinajs.cn/list=USDCNY";
	$html_usd = getHtml($url_usd);
		if(!empty($html_usd)){
					$arr =  explode(",",$html_usd);
		 
		$fee=$arr[1];
		//print_r($arr);
			}

//
 
	$url_1 = "http://hq.sinajs.cn/list=".$db1;
	
	$html_1 = getHtml($url_1);
		$url_2 = "http://hq.sinajs.cn/list=".$db2;
	
	$html_2 = getHtml($url_2);
		$url_3= "http://hq.sinajs.cn/list=hf_".$db3;
	
	$html_3 = getHtml($url_3);
	
		if(!empty($html_1)){
			$arr =  explode(",",$html_1);
		$data = array();
 
		$diff = $arr[8]-$arr[10];
		$diffRate= (($arr[8]-$arr[10])/$arr[10]) *100;
		
			//名称-最新价-涨跌-涨跌幅-开盘价-最高-最低-昨收-更新时间
		$data= array("name"=>'铜',"price"=>$arr[8],"diff"=>round($diff,2),"diffRate"=>round($diffRate,2).'%',"jinkai"=>$arr[2],"zuoshou"=>$arr[10],"zuidi"=>$arr[4],"zuigao"=>$arr[3],"time"=>date('Y-m-d H:i:s'));
		$tong1s= array("name"=>'铜',"price"=>$arr[8],"diff"=>round($diff,2),"diffRate"=>round($diffRate,2).'%',"jk"=>$arr[2],"zk"=>$arr[10],"zg"=>$arr[3],"zd"=>$arr[4],"time"=>date('Y-m-d H:i:s'));
		$of3 = fopen('../xh/tong.txt','w');//创建并打开dir.txt
	
	 fwrite($of3,json_encode($tong1s));//把执行文件的结果写入txt文件
	fclose($of3);
	//	print_r($data);
		$sql_1 = "insert into $db1(name,price,diff,diffRate,jinkai,zuoshou,zuidi,zuigao,time)  values ('".$data['name'].
			"','".$data['price']."','".$data['diff'].
			"','".$data['diffRate']."','".$data['jinkai'].
			"','".$data['zuoshou']."','".$data['zuidi'].
			"','".$data['zuigao']."','".$data['time']."')";
		//	echo $sql_1;

			if(mysql_query($sql_1,$conn)){
			echo  "更新".$db1."数据成功！<br>";
			} else {
			echo  "更新".$db1."数据失败：<br>".mysql_error();
			}/**/
	
	} 
	
		if(!empty($html_2)){
			$arr =  explode(",",$html_2);
		$data = array();
 
	
		$diff = $arr[7]-$arr[10];
		$diffRate= (($arr[7]-$arr[10])/$arr[10]) *100;
			//名称-最新价-涨跌-涨跌幅-开盘价-最高-最低-昨收-更新时间
		$data= array("name"=>'白银',"price"=>$arr[7],"diff"=>round($diff,2),"diffRate"=>round($diffRate,2).'%',"jinkai"=>$arr[2],"zuoshou"=>$arr[10],"zuidi"=>$arr[4],"zuigao"=>$arr[3],"time"=>date('Y-m-d H:i:s'));
		//print_r($data);
		$baiyins = array("name"=>'白银',"price"=>$arr[7],"diff"=>round($diff,2),"diffRate"=>round($diffRate,2).'%',"jk"=>$arr[2],"zk"=>$arr[10],"zg"=>$arr[3],"zd"=>$arr[4],"time"=>date('Y-m-d H:i:s'));
		$of2 = fopen('../xh/baiyin.txt','w');//创建并打开dir.txt

		fwrite($of2,json_encode($baiyins));//把执行文件的结果写入txt文件

		fclose($of2);
		$sql_1 = "insert into $db2(name,price,diff,diffRate,jinkai,zuoshou,zuidi,zuigao,time)  values ('".$data['name'].
			"','".$data['price']."','".$data['diff'].
			"','".$data['diffRate']."','".$data['jinkai'].
			"','".$data['zuoshou']."','".$data['zuidi'].
			"','".$data['zuigao']."','".$data['time']."')";
			//echo $sql_1;

			if(mysql_query($sql_1,$conn)){
			echo  "更新".$db2."数据成功！<br>";
			} else {
			echo  "更新".$db2."数据失败：<br>".mysql_error();
			}/**/
	
	} 
	if(!empty($html_3)){
	$arr =  explode(",",$html_3);
		$data = array();
 
		$price = substr($arr[0],-5);
		$diff = $price-$arr[7];
		$diffRate= (($price-$arr[7])/$arr[7]) *100;
			//名称-最新价-涨跌-涨跌幅-开盘价-最高-最低-昨收-更新时间
		$data= array("name"=>'油',"price"=>$price*$fee,"diff"=>round($diff,2),"diffRate"=>round($diffRate,2).'%',"jinkai"=>$arr[8]*$fee,"zuoshou"=>$arr[7]*$fee,"zuidi"=>$arr[5]*$fee,"zuigao"=>$arr[4]*$fee,"time"=>date('Y-m-d H:i:s'));
		$you1s= array("name"=>'油',"price"=>$price*$fee,"diff"=>round($diff,2),"diffRate"=>round($diffRate,2).'%',"jk"=>$arr[8]*$fee,"zk"=>$arr[7]*$fee,"zg"=>$arr[4]*$fee,"zd"=>$arr[5]*$fee,"time"=>date('Y-m-d H:i:s'));
		$of1 = fopen('../xh/you.txt','w');//创建并打开dir.txt

	 fwrite($of1,json_encode($you1s));//把执行文件的结果写入txt文件
	
	 fclose($of1);
		$sql_3 = "insert into $db3(name,price,diff,diffRate,jinkai,zuoshou,zuidi,zuigao,time)  values ('".$data['name'].
			"','".$data['price']."','".$data['diff'].
			"','".$data['diffRate']."','".$data['jinkai'].
			"','".$data['zuoshou']."','".$data['zuidi'].
			"','".$data['zuigao']."','".$data['time']."')";
		

			if(mysql_query($sql_3,$conn)){
			echo  "更新".$db3."数据成功！<br>";
			} else {
			echo "更新".$db3."数据失败：<br>".mysql_error();
			}/**/
	
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