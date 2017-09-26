<?php 

$dish_id1 = $_GET['dish_id1'];
$deal_id1 = $_GET['deal_id1'];

include("con_db.php");

$query0 = "SELECT count(1) FROM deal_menu where deal_id ='$deal_id1'";
$fetch0 = mysql_query($query0) or die(mysql_error());
$result0 = mysql_fetch_array($fetch0);
$total = $result0[0];

if ($total == 1) 
{
	# code...
	echo "<script>
	alert('last dish in deal cant be deleted') 
	window.location.href='deal_view_update.php?id=$deal_id1';
	</script>";
}
else
{
	$query2 = "DELETE from deal_menu where deal_id ='$deal_id1' AND  dish_id='$dish_id1'";
	mysql_query($query2) or die(mysql_error());


	mysql_close();
	echo "<script> 
		window.location.href='deal_view_update.php?id=$deal_id1';
		</script>";
}



?>