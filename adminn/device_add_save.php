<?php 
$mac_ip = $_POST['mac_ip'];
$mac_ip_lower = strtolower($mac_ip);
$mac_ip_alt = $_POST['mac_ip_alt'];
$table_number = $_POST['table_number'];

include('con_db.php');

$query = "INSERT INTO devices(mac_address,table_number)
VALUES('".$mac_ip_lower."','".$table_number."')";

mysql_query($query) or die(mysql_error());

echo "<script>
alert('New device saved');
window.location.href='devices_view.php';
</script>";

?>