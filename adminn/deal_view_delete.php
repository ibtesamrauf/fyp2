<?php 
$id = $_GET['id'];

include("con_db.php");

$test1 = false;
$test2 = false;

$query0 = "SELECT * FROM deal WHERE deal_id=".$id;
$fetch0 = mysql_query($query0) or die(mysql_error());
$result0 = mysql_fetch_assoc($fetch0);
$dir1 = "../".$result0['deal_image_url'];

$query2 = "DELETE from deal_menu where deal_id = ".$id;
$test2 = mysql_query($query2) or die(mysql_error());


$query = "DELETE from deal where deal_id = ".$id;
$test1 = mysql_query($query) or die(mysql_error());


if ($test1 && $test2 && unlink($dir1)) 
{
		mysql_close();
		echo "<script> alert('Deal has been deleted');
    			window.location.href='deal_view.php';
    			</script>";
}
else
{
	if (!file_exists($dir1)) 
	{
		# code...
			echo "<script> alert('Image is missing from folder');
			window.location.href='deal_view.php';
			</script>";

	}
	else
	{
		echo "<script> alert('Facing problem while deleating deal? Delete again');
			window.location.href='deal_view.php';
			</script>";
	}
}




?>