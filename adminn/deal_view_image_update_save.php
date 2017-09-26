<?php 

$deal_id = $_POST['dish_id'];
$deal_name = $_POST['dish_name'];
$deal_url = $_POST['dish_url'];


$hello_name = $_FILES["image"]["name"];
$hello_new1 = $_FILES["image"]["tmp_name"]; 
// $brand_folder_name = '\\'.strtolower("deal").'\\';
// $brand_folder_name1 = addslashes($brand_folder_name);

$brand_folder_name = strtolower("deal");
$brand_folder_name1 = "/".$brand_folder_name."/";

// echo "<br><br><br>its brand_folder_name : $brand_folder_name";
// echo "<br><br><br>its brand_folder_name1 : $brand_folder_name1";



		if($_FILES["image"]["error"] > 0)
		{
			// echo "error: ".$_FILES["image"]["error"]."<BR>";
			echo "<script> 
			window.location.href='deal_view.php';
			alert('Select image first');
			</script>";
		}
		else
		{
			if ($_FILES['image']['size'] == 0 )
			{
			    // cover_image is empty (and not an error)
			    echo "<script> 
						alert('file empty');
	        			</script>";
			}
			else
			{
				if(unlink("../".$deal_url))
				{
					move_uploaded_file($_FILES["image"]["tmp_name"],
					"c:/wamp64/www/fyp/item images/".$brand_folder_name."/".$_FILES["image"]["name"]);

					include('con_db.php');			

					$query = "UPDATE deal SET deal_image_url='item images".$brand_folder_name1."".$_FILES["image"]["name"]."' WHERE deal_id=".$deal_id;
					mysql_query($query) or die(mysql_error());

					mysql_close();

					//header('Location:add_product.php');
					echo "<script> 
		        			window.location.href='deal_view.php';
							alert('Image updated');
		        			</script>";

				}
			}
		}




?>