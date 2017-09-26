<?php
session_start();
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : 1;
// $id = $_GET['id'];
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
 
// make quantity a minimum of 1
$quantity=$quantity<=0 ? 1 : $quantity;
 
if (!empty($_SESSION['cart_back'])) 
{
	// remove the item from the array
	unset($_SESSION['cart_back'][$id]);
	 
	// add the item with updated quantity
	$_SESSION['cart_back'][$id]=array(
	    'quantity'=>$quantity
	);
	header('Location: edit_order.php');
}
else
{
	// remove the item from the array
	unset($_SESSION['cart'][$id]);
	 
	// add the item with updated quantity
	$_SESSION['cart'][$id]=array(
	    'quantity'=>$quantity
	);
	header('Location: check_out_show.php');
}
 
// redirect to product list and tell the user it was added to cart
// header('Location: check_test.php?action=quantity_updated&id='. $id);
 

 // header('Location: check_test.php');
 
?>