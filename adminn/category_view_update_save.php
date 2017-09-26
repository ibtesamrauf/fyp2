<?php 
$category_id = $_POST['category_id'];
$category_name = $_POST['category_name'];



include("con_db.php");




$query = "SELECT * FROM category where category_id =".$category_id;
$fetch = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($fetch);
$dir1 = "../"."item images/".$result['category_name'];
// echo $dir1;
// $check1 = rmdir($dir1);
$check1 = rename ($dir1, "../"."item images/".$category_name);

if ($check1) 
{
	# code...
	$query1 = "UPDATE category SET category_name='$category_name' where category_id =".$category_id;

	$res =  mysql_query($query1) or die(mysql_error());


	$query0 ="SELECT * FROM dish WHERE dish_category=(SELECT category_id FROM category WHERE category_id='".$category_id."')";
	$fetch0 = mysql_query($query0) or die(mysql_error());
	while ($result0 = mysql_fetch_assoc($fetch0)) 
	{
		// $var_1 = "aaew var";
		// $brand_folder_name = '\\'.strtolower($var_1).'\\';
		// $brand_folder_name1 = addslashes($var_1);
		$temp_url = str_replace($result['category_name'],$category_name,$result0['dish_image_url']);
		$query2 ="UPDATE dish SET dish_image_url='".$temp_url."' WHERE dish_id=".$result0['dish_id'];
		$fetch2 = mysql_query($query2) or die(mysql_error());
	}
	
	if ($res) 
	{
		mysql_close();
		echo "<script> alert('Record has been updated');
		window.location.href='category_view.php';
		</script>";

	}
	else
	{
		echo "<script> alert('Problem while saving, save again');
		window.location.href='category_view.php';
		</script>";

	}

}
else
{
		echo "<script> alert('Problem while saving, save again');
		window.location.href='category_view.php';
		</script>";

}




?>