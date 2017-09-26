<?php 

$category_name1 = $_POST['category_name'];
$category_name = strtolower($category_name1);
include("con_db.php");

if(is_dir("../"."item images/".$category_name)) 
{
    echo "<script>
	alert('The category {$category_name} already exists');
	window.location.href='category_add.php';
	</script>";
}
else
{   
	mkdir("../"."item images/".$category_name);  

	$query = "INSERT INTO category(category_name) VALUES('".mysql_real_escape_string($category_name)."')";
	$res = mysql_query($query) or die(mysql_error());

	if ($res) 
	{
		mysql_close();
		echo "<script> alert('Category Add');
		window.location.href='category_view.php';
		</script>";

	}
	else
	{
		echo "<script> alert('Problem while saving, save again');
		window.location.href='category_add.php';
		</script>";

	}
}





?>