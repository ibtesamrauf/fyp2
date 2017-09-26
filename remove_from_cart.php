<?php
// start session
session_start();
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 

// remove the item from the array
if (!empty($_SESSION['cart_back'])) 
{
	if (sizeof($_SESSION['cart_back']) == 1) 
	{
		error_reporting(0);
		if (sizeof($_SESSION['deal_back']) >= 1) 
		{
			# code...
			unset($_SESSION['cart_back'][$id]);
			header('Location: edit_order.php?action=removed&id=' . $id);
			$_SESSION['cart_back'] = array();
		}
		else
		{
			# code...
			// header('Location: edit_order.php?action=removed&id=' . $id);
			echo "<script>
			alert('You cannot cancel your complete order. One dish is necessary!');
			window.location.href='edit_order.php?action=removed&id=$id';
			</script>";
			// echo "abcd";
		}
	}
	else 
	{
		# code...
		// echo "efgh";
		unset($_SESSION['cart_back'][$id]);
		header('Location: edit_order.php?action=removed&id=' . $id);
	}
	
}
else
{
	unset($_SESSION['cart'][$id]);
	header('Location: check_out_show.php?action=removed&id=' . $id);
}
 
// redirect to product list and tell the user it was added to cart

// header('Location: check_test.php?action=removed&id=' . $id);
 
?>