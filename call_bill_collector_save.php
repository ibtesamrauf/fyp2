<?php 

// include 'con_db.php';

include 'get_device_name.php';

// $_SESSION['call_waiter_a']; 
if ($table_num == 1) 
{
	$flag1 = 3;
	echo "<script>
	window.location.href='device_not_register.php?flag={$flag1}';
	</script>";
}
else
{
	date_default_timezone_set('asia/karachi');
	$time1 =  date("h:i:sa")." ".date("d-m-Y"); 

		
	$query = "INSERT INTO bill_collector(table_number,time) VALUES('".$table_num."','".$time1."')";
	$res = mysql_query($query) or die(mysql_error());

	if ($res) 
	{
		// $res = true;
		// alert('inserted');
		mysql_close();
		echo "<script> 
		window.location.href='call_bill_collector.php?flag={$res}';
		</script>";
		// echo "pass";

	}
	else
	{
		// $res = false;
		// ?flag={$res}
		// alert('NOT inserted');
		echo "<script> 
		window.location.href='call_bill_collector.php?flag={$res}';
		</script>";
	// echo "pass";
	}
}





?>