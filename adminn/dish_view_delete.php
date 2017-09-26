<?php 
$id = $_GET['id'];

include("con_db.php");

$query0 = "SELECT * FROM dish WHERE dish_id=".$id;
$fetch0 = mysql_query($query0) or die(mysql_error());
$result0 = mysql_fetch_assoc($fetch0);

$dir1 = "../".$result0['dish_image_url'];

if(unlink($dir1))
{
	$query = "DELETE from dish where dish_id = ".$id;
	mysql_query($query) or die(mysql_error());
	mysql_close();
	echo "<script> alert('Record has been deleted');
	        			window.location.href='dish_view.php';
	        			</script>";
}



?>