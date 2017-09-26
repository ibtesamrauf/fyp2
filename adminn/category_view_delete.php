<?php 
$category_id = $_GET['category_id'];
$category_name = $_GET['category_name'];

include("con_db.php");

$dir1 = "../"."item images/".$category_name;

$flag1 = false;

if(count(glob("$dir1/*"))==0) {
    // echo 'dir empty';
	// $flag1=true;
    $query = "DELETE from category where category_id = ".$category_id;
	$flag1 = mysql_query($query) or die(mysql_error());
	rmdir($dir1);

} else {
    $flag1 = false;
}

if ($flag1) 
{
	# code...
	mysql_close();
	echo "<script> alert('Record has been deleted');
	window.location.href='category_view.php';
	</script>";
}
else
{
	echo "<script> alert('Category {$category_name} has files');
	window.location.href='category_view.php';
	</script>";	
}


?>