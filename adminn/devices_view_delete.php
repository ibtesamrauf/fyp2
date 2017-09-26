<?php 
$id = $_GET['id'];

include("con_db.php");

$test1 = false;
$query = "DELETE from devices where device_id = ".$id;
$test1 =  mysql_query($query) or die(mysql_error());
if ($test1) 
{
     # code...
    mysql_close();
    echo "<script> alert('Device has been deleted');
        window.location.href='devices_view.php';
        </script>";
}
else
{
	mysql_close();
    echo "<script> alert('Device has been deleted');
        window.location.href='devices_view.php';
        </script>";

}

?>