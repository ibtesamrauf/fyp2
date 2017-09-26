<?php 
session_start();

include 'get_device_name.php';


if ($table_num == 1) 
{
	$flag1 = 3;
	echo "<script>
	window.location.href='device_not_register.php?flag={$flag1}';
	</script>";
}
else
{
	$item_count1 = $_GET['item_count1'];
	$total1 = $_GET['total1'];
	$sub_time_total = $_GET['sub_time_total'];



		

	$o_id_od=0;
	 date_default_timezone_set('asia/karachi') ;
	$time =  date("h:i:sa")." ".date("d-m-Y");  
	// echo "$time";


	// echo "<br><br><br>$table_num<br><br><br>";

	$query = "INSERT INTO order1(order_amount,order_table,order_time,order_place_time,order_status) VALUES(".$total1.",(SELECT device_id FROM devices WHERE table_number='$table_num'),'".$sub_time_total."','".$time."',(SELECT status_id FROM order_status WHERE status_title='inprocess'))";
	mysql_query($query) or die(mysql_error());

	$query = "SELECT order_id FROM order1 where order_place_time='$time' AND order_table=(SELECT device_id FROM devices WHERE table_number='$table_num')  ";
	$fetch = mysql_query($query);

	if (empty($fetch)) 
	{
		die(mysql_error());
	}
	else
	{
		while ($result = mysql_fetch_assoc($fetch)) 
		{
			$order_id_f =  $result['order_id'];
		}
	}
	$test = false;
	$test2 = false;

	// echo "<br><br><br><br><h1>its a foreach loop </h1>";
	if (!empty($_SESSION['cart'])) 
	{
		foreach($_SESSION['cart'] as $id=>$value)
		{
	        // echo "<br>id : $id ";
	        foreach ($value as $key => $value1) 
	        {
	        // array_push($quantitys, $value1);
		        $query = "INSERT INTO order_dish(order_id,item_id,order_type,quantity) VALUES(".$order_id_f.",".$id.",2,'".$value1."')";
			  	$test = mysql_query($query) or die(mysql_error());

	        }
	    }
	}
	if (!empty($_SESSION['deal'])) 
	{
		# code...
		    foreach($_SESSION['deal'] as $id=>$value)
		    {
		        // echo "<br>id : $id ";
		        foreach ($value as $key => $value1) 
		        {
		        // array_push($quantitys, $value1);
			        $query1 = "INSERT INTO order_dish(order_id,item_id,order_type,quantity) VALUES(".$order_id_f.",".$id.",1,'".$value1."')";
				  	$test2 = mysql_query($query1) or die(mysql_error());

		        }
		    }
	}


	// $query = "INSERT INTO order_dish(order_id,item_id,order_type,quantity) VALUES(".$order_id_f.",2,2,'".$quantitys1."')";
	 // echo "<br><br>";
	// echo "$query";
	 // echo "<br><br>";
	 // $test = false;
	// $test = mysql_query($query) or die(mysql_error());
	  // $test = mysql_query($query) ;
	 
	 // echo "<br><br>";
	// echo "$query";

	$check = false;
	if ($test || $test2) {
		// session_destroy();
		if (!empty($_SESSION['cart'])) {
			# code...
			unset($_SESSION['cart']);
		}
		if (!empty($_SESSION['deal'])) {
			# code...
			unset($_SESSION['deal']);
		}
		$check = true;
		$_SESSION['check_new_order'] = 0;
		 echo "<script>
		window.location.href='place_order.php?flag={$check}';
		</script>";
		
	}
	else
	{
		 echo "<script>
		alert('HAVING SOME PROBLEM IN YOUR ORDER, CONTACT WAITER!');
		window.location.href='place_order.php?flag={$test}';
		</script>";
	}
}

?>
