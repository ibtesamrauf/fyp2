<?php 
$admin_id_1 = $_POST['admin_id_1'];

$admin_password_1 = $_POST['admin_password_1'];

include("con_db.php");


$query = "UPDATE admin SET admin_password ='".$admin_password_1."' where admin_id =".$admin_id_1;

$res =  mysql_query($query) or die(mysql_error());


if ($res) 
{
	mysql_close();
	echo "<script> alert('Password updated!');
	window.location.href='dashboard.php';
	</script>";

}
else
{
	echo "<script> alert('Problem while updating password, Update again');
	window.location.href='dashboard.php';
	</script>";

}



?>