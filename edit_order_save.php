<?php 
session_start();
$order_id1 = $_SESSION['order_id1'];

$item_count1 = $_GET['item_count1'];
$total1 = $_GET['total1'];
$sub_time_total = $_GET['sub_time_total'];

$test=false;
$test2=false;


include 'con_db.php';

$query1 = "UPDATE order1 SET order_amount='$total1',order_time='$sub_time_total' where order_id='$order_id1'";
$fetch = mysql_query($query1) or die(mysql_error());



$query2 = "DELETE FROM order_dish where order_id='$order_id1' AND order_type=2";
	$fetch2 = mysql_query($query2) or die(mysql_error());
	
if (!empty($_SESSION['cart_back'])) 
{
	// if ($fetch2) 
	{
		# code...
		foreach($_SESSION['cart_back'] as $id=>$value)
		{
        	// echo "<br>id : $id ";
	        foreach ($value as $key => $value1) 
	        {
	        // array_push($quantitys, $value1);

		        $query = "INSERT INTO order_dish(order_id,item_id,order_type,quantity) VALUES(".$order_id1.",".$id.",2,'".$value1."')";
			  	$test = mysql_query($query) or die(mysql_error());

	        }
    	}
	}
	
	// $_SESSION['cart_back'] = array();
	
}

$query3 = "DELETE FROM order_dish where order_id='$order_id1' AND order_type=1";
	$fetch3 = mysql_query($query3) or die(mysql_error());
	
if (!empty($_SESSION['deal_back'])) 
{
	// if ($fetch3) 
	{
		foreach($_SESSION['deal_back'] as $id=>$value)
		{
	        // echo "<br>id : $id ";
	        foreach ($value as $key => $value1) 
	        {
	        // array_push($quantitys, $value1);
		        $query = "INSERT INTO order_dish(order_id,item_id,order_type,quantity) VALUES(".$order_id1.",".$id.",1,'".$value1."')";
			  	$test2 = mysql_query($query) or die(mysql_error());

	        }
	    }
	}
	
	// $_SESSION['deal_back'] = array();
	
}

if ($test || $test2) 
{
	echo "<script>
	alert('Your order is updated');
	window.location.href='index.php';
	</script>";
	unset($_SESSION['order_id1']);
	unset($_SESSION['cart_back']);
	unset($_SESSION['deal_back']);
}
else
{
	echo "<script>
	alert('Having some problem update your order again');
	window.location.href='index.php';
	</script>";
}


?>