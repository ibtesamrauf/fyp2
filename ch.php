<?php 

// $to_time = strtotime("2017-01-01 10:26:00");

$to_time = strtotime("05:30:11pm 01-01-2017");

$from_time = strtotime("05:25:10pm 01-01-2017");
$mins = round(abs($to_time - $from_time) / 60,2);
// echo round(abs($to_time - $from_time) / 60,2). " minute";

echo "<br>$mins Minutes left";
if ($mins <= 5) 
{
	echo "<br><h2>CAN GET ORDER BACK</h2>";
}
else
{
	echo "<br><h2>CANT CALL ORDER BACK</h2>";
}
session_start();
print_r($_SESSION['cart']);

$dish_ids = array();
foreach($_SESSION['cart'] as $id=>$value)
	{
        echo "<br>id : $id ";
        // $dish_ids = $id;
        array_push($dish_ids, $id);
    }
include 'con_db.php';
echo "<br>";
print_r($dish_ids);
echo "<br>";
$array1 = implode("','",$dish_ids);
$query = "SELECT * FROM dish WHERE dish_id IN ('$array1')";
$fetch = mysql_query($query) or die(mysql_error());
while ($result = mysql_fetch_assoc($fetch)) 
{
	# code...
	echo $result['dish_estimated_time'];
	echo "<br>";

}



?>