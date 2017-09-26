<?php 

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
// for admin pc ip_address
// start **************8

$localIP = getHostByName(php_uname('n'));

// echo "$localIP";

//end***************


//If you want you can track the page visitor's mac address and store in database
//Insert the visitor's mac address to database
// " INSERT INTO `table_name` (`column_name`) VALUES('".$mac_address."') ";
include 'con_db.php';

$query = "SELECT * FROM devices";

$fetch = mysql_query($query) or die(mysql_error());
// echo "<br>$macAddr<br>";
while ($result = mysql_fetch_assoc($fetch)) 
{
	// echo $result['mac_address']."<br>";
	// echo $result['table_number']."<br>";
	if ($macAddr == $result['mac_address']) 
	{
		# code...
		$table_num = $result['table_number'];
		// echo "1 $table_num";
		break;
	}
	elseif ($ipAddress == $result['mac_address']) {
		# code...
		$table_num = $result['table_number'];
		// echo "2 $table_num";
		break;
	}
	elseif (empty($macAddr)) 
	{
		if ($localIP == $result['mac_address']) 
		{
			$table_num = $result['table_number'];
			$ipAddress = $localIP;
			// echo "3 $table_num";
			break;
		}
	
	}	
}
if (empty($table_num)) 
{
	# code...
	$table_num = 1;
}

?>