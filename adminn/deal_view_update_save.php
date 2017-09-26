<?php 
$deal_id = $_POST['deal_id'];
$deal_name = $_POST['deal_name'];
$deal_price = $_POST['deal_price'];

echo $deal_id."<br>";
echo $deal_name."<br>";
echo $deal_price."<br>";

// echo "<br>list of CHECK BOS DATA<br><br>";
// foreach($_POST['check_list'] as $selected){
// echo $selected."</br>";
// echo $selected;
// }

include 'con_db.php';

$query = "UPDATE deal SET deal_name='".$deal_name."',deal_price='".$deal_price."' WHERE deal_id =".$deal_id;

$test1 = mysql_query($query) or die(mysql_error());



$test = false;
if (!empty($_POST['check_list']) && !empty($_POST['check_list1'])) 
{
	# code...
	foreach (array_combine($_POST['check_list'], $_POST['check_list1']) as $dish1 => $quantity1)
	{
	$query1 = "INSERT INTO deal_menu(deal_id,dish_id,quantity) VALUES('".$deal_id."','".$dish1."','".$quantity1."') ";
	$test = mysql_query($query1) or die(mysql_error());
	}
}


if ($test || $test1) 
{
	# code...
	mysql_close();
	echo "<script> 
			window.location.href='deal_view_update.php?id=$deal_id';
			</script>";
}
else
{
	# code...
	echo "<script> 
			alert('Facing problem while updating, Save again');
			window.location.href='deal_view_update.php?id=$deal_id';
			</script>";

}



?>