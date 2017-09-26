<?php 
$order_id = $_GET['order_id1'];

include("con_db.php");


			$query1 = "SELECT order_status FROM order1 where order_id=".$order_id; 
			$check1 = mysql_query($query1) or die(mysql_error());
			$result1 = mysql_fetch_assoc($check1);

			if ($result1['order_status'] == 2) 
			{
				echo "<script> alert('Order has been served by Chef, Please Contact Chef');
				window.location.href='order1_view.php';
				</script>";
			}
			else
			{

				$query = "UPDATE order1 SET order_status=4 where order_id =".$order_id;

				$res =  mysql_query($query) or die(mysql_error());


				if ($res) 
				{
					mysql_close();
					echo "<script> alert('Status Updated');
					window.location.href='order1_view.php';
					</script>";

				}
				else
				{
					echo "<script> alert('Problem while updating, Update again');
					window.location.href='order1_view.php';
					</script>";

				}

			}

?>