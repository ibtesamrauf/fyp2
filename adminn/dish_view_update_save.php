<?php 
$dish_id = $_POST['dish_id'];
$dish_name = $_POST['dish_name'];
$dish_desc = $_POST['dish_desc'];
$dish_catagory = $_POST['dish_catagory'];
$dish_price = $_POST['dish_price'];

include("con_db.php");

			// echo "<script> alert('IMAGE ALREADY EXIST ');
   //      			window.location.href='add_dish.php';
   //      			</script>";
			

			// $query = "INSERT INTO dish(dish_name,dish_desc,dish_category,dish_price,date)
			// VALUES('".$dish_name."','".mysql_real_escape_string($dish_desc)."','".$dish_catagory."','".$dish_price."',now()) ";

			$query = "UPDATE dish SET dish_name='".$dish_name."',dish_desc='".$dish_desc."',dish_category=(SELECT category_id FROM category WHERE category_name='$dish_catagory'),
			dish_price=".$dish_price." where dish_id =".$dish_id;

			mysql_query($query) or die(mysql_error());

			mysql_close();

			//header('Location:add_product.php');
			echo "<script> alert('Record Updated');
        			window.location.href='dish_view.php';
        			</script>";


?>