<?php 
$fn = $_POST['fn'];
// $ln = $_POST['ln'];
$email = $_POST['email'];
// $address = $_POST['address'];
$order = $_POST['order'];
$price = $_POST['price'];


$ipAddress=$_SERVER['REMOTE_ADDR'];
$macAddr=false;

#run the external command, break output into lines
$arp=`arp -a $ipAddress`;
$lines=explode("\n", $arp);

#look for the output line describing our IP address
foreach($lines as $line)
{
   $cols=preg_split('/\s+/', trim($line));
   if ($cols[0]==$ipAddress)
   {
       $macAddr=$cols[1];
   }
}
// echo $macAddr;
// echo "<br>";

// echo $ipAddress;
// echo "<br>";
// echo "<br>";
// echo "<br>";




// $ip_laptop = $_SERVER['SERVER_ADDR'];
// echo "$ip_laptop";


// function getUserIP()
// {
//     $client  = @$_SERVER['HTTP_CLIENT_IP'];
//     $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
//     $remote  = $_SERVER['REMOTE_ADDR'];

//     if(filter_var($client, FILTER_VALIDATE_IP))
//     {
//         $ip = $client;
//     }
//     elseif(filter_var($forward, FILTER_VALIDATE_IP))
//     {
//         $ip = $forward;
//     }
//     else
//     {
//         $ip = $remote;
//     }

//     return $ip;
// }


// $user_ip = getUserIP();

// echo $user_ip; 
// echo $mac;

// if ($macAddr == "a0-f8-95-93-8c-60") {
// 	$table_num = "QMobile Linq L15";
// }
// else if ($macAddr == "ac-d0-74-fb-c2-d9") {
// 	$table_num = "QTab V1";	
// }
// else if ($macAddr == "bc-d1-d3-c2-ec-4c") {
// 	$table_num = "QMobile Noir i9";	
// }
// else if ($ipAddress == "192.168.0.101") {
// 	$table_num = "Admin pc";	
// }



// for admin pc ip_address
// start **************8

$localIP = getHostByName(php_uname('n'));
// echo "$localIP";

//end***************


include('con_db.php');

$query = "SELECT * FROM devices";

$fetch = mysql_query($query) or die(mysql_error());

while ($result = mysql_fetch_assoc($fetch)) 
{
	// echo $result['mac_address']."<br>";
	if ($macAddr == $result['mac_address']) 
	{
		# code...
		$table_num = $result['table_number'];
		echo "$table_num";
	}
	elseif ($ipAddress == $result['mac_address']) {
		# code...
		$table_num = $result['table_number'];
		echo "$table_num";
	}
	elseif ($localIP == $result['mac_address']) {
		# code...
		$table_num = $result['table_number'];
		$ipAddress = $localIP;
		echo "$table_num";
	}
}

// $name = $fn." ".$ln;
 $name = $fn;
$query = "INSERT INTO user_orders(name,email,order1,price,macAdd,ipAdd,table_num,date) 
values('".$name."','".$email."','".$order."','".$price."','".$macAddr."','".$ipAddress."','".$table_num."',now())";


mysql_query($query) or die(mysql_error());

session_start();
session_unset();
session_destroy();
echo "<script>
alert('Thank you for your order');
window.location.href='index.php';
</script>";
?>