<?php 
$device_id = $_POST['device_id'];
$mac_address = $_POST['mac_address'];
$table_number = $_POST['table_number'];

$mac_address_lower = strtolower($mac_address);

include("con_db.php");

$query = "UPDATE devices SET mac_address='".$mac_address_lower."',table_number='".$table_number."' 
where device_id =".$device_id;

mysql_query($query) or die(mysql_error());

mysql_close();

echo "<script> alert('Record Updated');
		window.location.href='devices_view.php';
		</script>";

?>