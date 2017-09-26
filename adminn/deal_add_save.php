<?php 

$deal_name = $_POST['deal_name'];
$deal_price = $_POST['deal_price'];

echo "<br>list of CHECK BOS DATA<br><br>";
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}



include("con_db.php");

// $hello_name = $_FILES["image"]["name"];
// $hello_new1 = $_FILES["image"]["tmp_name"]; 
// $brand_folder_name = '\\'.strtolower($item_catagory).'\\';
// $brand_folder_name1 = addslashes($brand_folder_name);
// echo "<br><br><br>its brand_folder_name : $brand_folder_name";
// echo "<br><br><br>its brand_folder_name1 : $brand_folder_name1";



		if($_FILES["image"]["error"] > 0)
		{
			// echo "error: ".$_FILES["image"]["error"]."<BR>";
			echo "<script> 
						window.location.href='deal_add.php';
						alert('Select Image first');
						</script>";
					
		}
		else
		{
				// echo "upload: ".$_FILES["file"]["name"]."<BR>";
				// echo "type: ".$_FILES["file"]["type"]."<BR>";
				// echo "size: ".($_FILES["file"]["size"]/1024)."kB<br>";
				// echo "Store in: ".$_FILES["file"]["tmp_name"]."<br>";

				// C:\wamp64\www\fyp\item images
				// if(file_exists("c:/wamp64/www/fyp/item images/".$brand_folder_name."/".$_FILES["image"]["name"]))
				// if ($_FILES['image']['size'] == 0 )
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
						"c:/wamp64/www/fyp/item images/deal/".$_FILES["image"]["name"]);


					include('con_db.php');			

					$query1 = "INSERT INTO deal(deal_name,deal_price,deal_image_url) VALUES('".mysql_real_escape_string($deal_name)."','".mysql_real_escape_string($deal_price)."','item images/deal/".$_FILES["image"]["name"]."') ";

					mysql_query($query1) or die(mysql_error());


					$query2 = "SELECT * FROM deal ORDER BY deal_id DESC LIMIT 1";
					// SELECT fields FROM table ORDER BY id DESC LIMIT 1;

					$fetch2 = mysql_query($query2) or die(mysql_error());

					$result2 = mysql_fetch_assoc($fetch2);

					// echo "<br>list of CHECK BOS DATA<br><br>";
					// foreach($_POST['check_list'] as $selected){
					// echo $selected."</br>";
					// }

					$test = false;

						foreach (array_combine($_POST['check_list'], $_POST['check_list1']) as $dish1 => $quantity1)
						{
							// echo "dish : ".$dish1." AND quantity : ".$quantity1;
							$query3 = "INSERT INTO deal_menu(deal_id,dish_id,quantity) VALUES('".$result2['deal_id']."','".$dish1."','".$quantity1."') ";
							$test = mysql_query($query3) or die(mysql_error());
						}
					
					

					if ($test) 
					{
						# code...
						mysql_close();
						// echo "<br><br><br>PASS";
						echo "<script> 
								alert('Record has been saved');
								window.location.href='deal_view.php';
								</script>";
					}
					else
					{
						# code...
						echo "<br><br><br>fail";
					}

					
					//header('Location:add_product.php');
					// echo "<script> alert('Record Save');
					   //      			window.location.href='dish_add.php';
					   //      			</script>";
			}
				
		}




?>