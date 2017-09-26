<?php 
$dish_id = $_GET['id'];
$deal_id1 = $_GET['deal_id1'];
$update_quantity = $_POST['update_quantity'];


include 'con_db.php';

$query = "UPDATE deal_menu SET quantity='".$update_quantity."' WHERE dish_id =".$dish_id;

$test = mysql_query($query) or die(mysql_error());


if ($test) 
{
	# code...
	mysql_close();
	echo "<script> 
			window.location.href='deal_view_update.php?id=$deal_id1';
			</script>";
}
else
{
	echo "<script> 
			alert('Facing problem while updating, Save again');
			window.location.href='deal_view.php;
			</script>";
}

?>