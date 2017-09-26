<?php 

$item_name = $_POST['item_name'];
$item_desc = $_POST['item_desc'];
$item_catagory = $_POST['item_catagory'];

// echo "its item_catagory : $item_catagory";
$item_price = $_POST['item_price'];
$dish_est_time = $_POST['dish_est_time'];


include("con_db.php");


$hello_name = $_FILES["image"]["name"];
$hello_new1 = $_FILES["image"]["tmp_name"]; 

// $brand_folder_name = '\\'.strtolower($item_catagory).'\\';
// $brand_folder_name1 = addslashes($brand_folder_name);

$brand_folder_name = strtolower($item_catagory);
$brand_folder_name1 = "/".$brand_folder_name."/";


// echo "<br><br><br>its brand_folder_name : $brand_folder_name";
// echo "<br><br><br>its brand_folder_name1 : $brand_folder_name1";



if($_FILES["image"]["error"] > 0)
		{
			echo "error: ".$_FILES["image"]["error"]."<BR>";
		}
		else
		{
			// echo "upload: ".$_FILES["file"]["name"]."<BR>";
			// echo "type: ".$_FILES["file"]["type"]."<BR>";
			// echo "size: ".($_FILES["file"]["size"]/1024)."kB<br>";
			// echo "Store in: ".$_FILES["file"]["tmp_name"]."<br>";

// C:\wamp64\www\fyp\item images
		// if(file_exists("c:/wamp64/www/fyp/item images/".$brand_folder_name."/".$_FILES["image"]["name"]))
		{
			// echo "<script> alert('IMAGE ALREADY EXIST ');
   //      			window.location.href='dish_add.php';
   //      			</script>";
			// // echo "<BR>";
			// echo $_FILES["file"]["name"]."already exist. ";
			
		}
		// else
		{
			move_uploaded_file($_FILES["image"]["tmp_name"],
				"c:/wamp64/www/fyp/item images/".$brand_folder_name."/".$_FILES["image"]["name"]);


			include('con_db.php');			

// $query1 = "INSERT INTO order1(order_amount,order_table,order_time,order_status) VALUES(".$total1.",'".$table_num."','".$time."',(SELECT status_id FROM order_status WHERE status_title='general'))";

$query = "INSERT INTO dish(dish_name,dish_desc,dish_image_url,dish_price,dish_estimated_time,dish_category) VALUES('".mysql_real_escape_string($item_name)."','".mysql_real_escape_string($item_desc)."','item images".$brand_folder_name1."".$_FILES["image"]["name"]."',".$item_price.",'".$dish_est_time."',(SELECT category_id FROM category where category_name='$item_catagory')) ";

// echo "<br><br><br>$query<br><br><br>";
// echo "<br><br><br>$query1<br><br><br>";

			mysql_query($query) or die(mysql_error());

			mysql_close();

			//header('Location:add_product.php');
			echo "<script> alert('Record Save');
        			window.location.href='dish_add.php';
        			</script>";
		}
		
		}




?>